<?php

namespace App\Http\Controllers;

use App\Models\Mfy;
use App\Models\MfySector;
use App\Http\Requests\MfyStoreRequest;

class MfyController extends Controller
{
    public function ApiIndex()
    {
        $mfy = Mfy::query()
        ->join('mfy_sectors as mfy_sector', 'mfy_sector.id', 'mfys.sector_id')
        ->select([
            'mfys.tel',
            'mfys.raisi',
            'mfys.name',
            'mfy_sector.name as sector'
        ])->get();
        return response()->json([
            'MFY' => $mfy,
            'count' => $mfy->count()
        ]);
    }
    public function index()
    {
        $mfys = Mfy::all();
        return view('adminpanel.tables.mfy.mfys',compact('mfys'));
    }
    public function create()
    {
        $mfySs = MfySector::all();
        return view('adminpanel.tables.mfy.createdata', compact('mfySs'));
    }

    public function store(MfyStoreRequest $request)
    {
        MFY::create($request->validated());
        return to_route('mfy.index');
    }
   
    public function edit(Mfy $mfy)
    {
        $mfysector = MfySector::all();
        return view('adminpanel.tables.mfy.editdata',compact('mfy','mfysector'));
    }
 
    public function update(MfyStoreRequest $request, Mfy $mfy)
    {
        $mfy->update($request->validated());
        return to_route('mfy.index');
    }

    public function destroy(Mfy $mfy)
    {
        $mfy->delete();
        return to_route('mfy.index')->with('succes',' Muvaffaqqiyatli o\'chirildi');
    }
}
