<?php

namespace App\Http\Controllers;

use App\Http\Requests\MfySectorStoreRequest;
use App\Models\Mfy;
use App\Models\mfy_sector;
use App\Models\MfySector;
use Illuminate\Http\Request;

class MfySectorController extends Controller
{
    public function ApiIndex()
    {
        $mfySs = MfySector::all();
        return response()->json([
            'MfyS' => $mfySs
        ]);
    }
  
    public function index()
    {
        $mfysector = MfySector::all();
        return view('adminpanel.tables.mfySector.mfySs', compact('mfysector'));
    }

    public function create()
    {
        return view('adminpanel.tables.mfySector.createdata');
    }

    public function store(MfySectorStoreRequest $request)
    {
        MfySector::create($request->validated());

        return to_route('mfysector.index');   
    }

    public function edit(MfySector $mfysector)
    {
        return view('adminpanel.tables.mfySector.editdata',compact('mfysector'));
    }

    public function update(MfySectorStoreRequest $request, MfySector $mfysector)
    {
        $mfysector->update($request->validated());

        return to_route('mfysector.index');
    }

    public function destroy(MfySector $mfysector)
    {
        $mfysector->delete();
        return to_route('mfysector.index');
    }
}

