<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\GovernmentAdministrativeGuide;
use App\Http\Requests\GovernmentAdministrativeGuideStoreRequest;
// use Storage;

class GovernmentAdministrativeGuideController extends Controller
{
    public function ApiIndex()
    {
        $data = GovernmentAdministrativeGuide::all();
        return response()->json(['data' => $data]);
    }
    public function index()
    {
        $govguides = GovernmentAdministrativeGuide::all();

        return view('adminpanel.tables.govguide.govguides',compact('govguides'));
    }
    public function create()
    {
        return view('adminpanel.tables.govguide.createdata');
    }
    public function store(GovernmentAdministrativeGuideStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('file_path')) {
            $fileName = $request->file('file_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($fileName, '.');
            $name = chop($fileName, $nameWithoutExtension);
            $ext = $request->file('file_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h') . '.' . $ext;
            $request->file('file_path')->move(public_path('/storage/files/govguides/'), $new_name);
            $data['file_path'] = $new_name;
        }
        GovernmentAdministrativeGuide::create($data);
        return to_route('govguide.index');
    }
    public function edit(GovernmentAdministrativeGuide $govguide)
    {
        return view('adminpanel.tables.govguide.editdata', compact('govguide'));
    }
    public function update(GovernmentAdministrativeGuideStoreRequest $request, GovernmentAdministrativeGuide $govguide)
    {
        $data = $request->validated();
        if ($request->hasFile('file_path')) {
            if (isset($govguide->file_path)) {
                File::delete(public_path('/storage/files/govguides/' . $govguide->file_path));
            }
            $name = $request->file('file_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($name, '.');
            $name = chop($name, $nameWithoutExtension);
            $ext = $request->file('file_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h') . '.' . $ext;
            $request->file('file_path')->move(public_path('/storage/files/govguides/'), $new_name);
            $data['file_path'] = $new_name;
        }
        $govguide->update($data);
        return to_route('govguide.index');
    }       
    public function destroy(GovernmentAdministrativeGuide $govguide)
    {
        if (File::exists(public_path('/storage/files/govguides/' . $govguide->file_path))) {
            File::delete(public_path('/storage/files/govguides/' . $govguide->file_path));
        }
        $govguide->delete();
        return to_route('govguide.index');
    }
}
