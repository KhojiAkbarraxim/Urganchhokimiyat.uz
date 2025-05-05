<?php

namespace App\Http\Controllers;

use App\Models\Apparat;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ApparatStoreRequest;

class ApparatController extends Controller
{
    public function ApiIndex()
    {
        $apparats = Apparat::query()
            ->join('schedules', 'apparats.id', '=', 'schedules.apparat_id')
            ->select([
                'apparats.id',
                'apparats.ismi_sharifi',
                'apparats.hodim_malumotlari',
                'apparats.hodim_malumotlari_eng',
                'apparats.hodim_malumotlari_ru',
                'apparats.kasbi',
                'apparats.kasbi_eng',
                'apparats.kasbi_ru',
                'apparats.image_path',
                'apparats.tel',
                'apparats.majburiyati',
                'apparats.majburiyati_ru',
                'apparats.majburiyati_eng',
                'apparats.email',
                'apparats.address',
                'apparats.created_at',
                'schedules.day',
                'schedules.time',
            ])
            ->get();
        return response()->json([$apparats]);
    }
    public function index()
    {
        $apparats = Apparat::all();
        return view('adminpanel.tables.apparat.apparats', compact('apparats'));
    }
    public function create()
    {
        return view('adminpanel.tables.apparat.createdata');
    }
    public function store(ApparatStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image_path')) {
            $name = $request->file('image_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($name, '.');
            $name = chop($name, $nameWithoutExtension);
            $ext = $request->file('image_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h-m') . '.' . $ext;
            $request->file('image_path')->move(public_path('images/apparats/'), $new_name);
            $data['image_path'] = $new_name;
        }
        Apparat::query()->create($data);
        return redirect()->route('apparat.index');
    }

    public function edit(Apparat $apparat)
    {
        return view('adminpanel.tables.apparat.editdata', compact('apparat'));
    }
    public function update(ApparatStoreRequest $request, Apparat $apparat)
    {
        $data = $request->validated();
        if ($request->hasFile('image_path')) {
            if (isset($apparat->image_path)) {
                File::delete(public_path('images/apparats/' . $apparat->image_path));
            }
            $name = $request->file('image_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($name, '.');
            $name = chop($name, $nameWithoutExtension);
            $ext = $request->file('image_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h-m') . '.' . $ext;
            $request->file('image_path')->move(public_path('images/apparats/'), $new_name);
            $data['image_path'] = $new_name;
        }

        $apparat->update($data);
        return redirect()->route('apparat.index');
    }
    public function destroy(Apparat $apparat)
    {
        if (File::exists(public_path('images/apparats/' . $apparat->image_path))) {
            File::delete(public_path('images/apparats/' . $apparat->image_path));
        }
        $apparat->delete();
        return redirect()->route('apparat.index');
    }
}
