<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Company;
use App\Enums\ObjectTypes;
use Illuminate\Http\Request;
use App\Http\Requests\MapStoreRequest;

class MapController extends Controller
{
    public function ApiIndex($id)
    {
        if ($id == 0) {
            $data = Map::query()
            ->join('companies as company', 'company.id', 'object_locations.company_id')
            ->select([
                'object_locations.id',
                'object_locations.address',
                'object_locations.latitude',
                'object_locations.longitude',
                'object_locations.tree_count',
                'company.name as company_name'])
            ->where('obj_type', '=','Axlat_Yigish')->get();
        }
        else{
            $data = Map::query()
            ->join('companies as company', 'company.id', 'object_locations.company_id')
            ->select([
                'object_locations.id',
                'object_locations.address',
                'object_locations.latitude',
                'object_locations.longitude',
                'object_locations.tree_count',
                'company.name as company_name'])
            ->where('obj_type', '=','Yashil_Makon')->get();
        }
        return response()->json(['Data' => $data]);
    }
    public function index()
    {
        $maps = Map::all();
        return view('adminpanel.tables.map.maps')->with('maps', $maps);
    }

    public function create()
    {
        $companies = Company::all();
        return view('adminpanel.tables.map.createdata', compact('companies'));
    }

    public function store(MapStoreRequest $request)
    {
        Map::create($request->validated());
        return redirect()->route('map.index');
    }

    public function edit(Map $map)
    {
        $companies = Company::all();
        return view('adminpanel.tables.map.editdata', compact('map', 'companies'));
    }

    public function update(MapStoreRequest $request, Map $map)
    {
        $map->update($request->validated());
        return to_route('map.index')->with('updated', 'Muvaffaqiyatli yangilandi');
    }

    public function destroy(Map $map)
    {
        $map->delete();
        return to_route('map.index')->with('succes', 'Muvaffaqqiyatli o\'chirildi');
    }
}
