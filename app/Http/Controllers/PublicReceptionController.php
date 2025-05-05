<?php

namespace App\Http\Controllers;

use App\Models\Apparat;
use Illuminate\Support\Carbon;
use App\Models\PublicReception;
use App\Http\Requests\PublicReceptionStoreRequest;

class PublicReceptionController extends Controller
{
    public function ApiIndex($id)
    {
        if ($id == 0) {
            $public_receptions = PublicReception::query()
                ->join('apparats as apparat', 'apparat.id', 'public_receptions.apparat_id')
                ->select([
                    'public_receptions.id',
                    'public_receptions.qabul_joyi_manzili',
                    'public_receptions.begin_date',
                    'public_receptions.desc_uz',
                    'public_receptions.desc_eng',
                    'public_receptions.desc_ru',
                    'apparat.ismi_sharifi as hokimiyat_vakili'
                ])
                ->where('status', '=', 0)
                ->orderBy('public_receptions.created_at', 'desc')
                ->paginate(10);
        } 
        else{
                $public_receptions = PublicReception::query()
                ->join('apparats as apparat', 'apparat.id', 'public_receptions.apparat_id')
                ->select([
                    'public_receptions.id',
                    'public_receptions.qabul_joyi_manzili',
                    'public_receptions.begin_date',
                    'public_receptions.desc_uz',
                    'public_receptions.desc_eng',
                    'public_receptions.desc_ru',
                    'apparat.ismi_sharifi as hokimiyat_vakili'
                ])
                ->where('status', '=', 1)
                ->orderBy('public_receptions.created_at', 'desc')
                ->paginate(10);
            }
        return response()->json(['Data' => $public_receptions]);
    }

    public function index()
    {
        $public_receptions = PublicReception::latest()->get();

        return view('adminpanel.tables.reception.receptions', compact('public_receptions'));
    }
    public function create()
    {
        $apparats =  Apparat::all();

        return view('adminpanel.tables.reception.createdata', compact('apparats'));
    }

    public function store(PublicReceptionStoreRequest $request)
    {
        PublicReception::create($request->validated());

        return to_route('reception.index')->with('success', 'Muvaffaqqiyatli bajarildi!');
    }

    public function edit(PublicReception $reception)
    {
        $apparats = Apparat::all();

        return view('adminpanel.tables.reception.editdata', compact('apparats', 'reception'));
    }

    public function update(PublicReceptionStoreRequest $request, PublicReception $reception)
    {
        $reception->update($request->validated());
        return to_route('reception.index')->with('success', 'Muvaffaqqiyatli yangilandi!');
    }
    public function destroy(PublicReception $public_reception)
    {
        $public_reception->delete();
        return to_route('reception.index');
    }
}
