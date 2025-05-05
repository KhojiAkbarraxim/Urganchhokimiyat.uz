<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventTypeStoreRequest;
use App\Models\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    
    public function index()
    {
        $eventtypes = EventType::all();
        return view('adminpanel.tables.EventType.eventtypes', compact('eventtypes'));
    }

    public function create()
    {
        return view('adminpanel.tables.EventType.createdata');
    }

    public function store(EventTypeStoreRequest $request)
    {
        EventType::create($request->validated());
        return to_route('types.index')->with('succes', 'Malumot muvaffaqqiyatli qo\'shildi');
    }

    public function edit(EventType $type)
    {
        return view('adminpanel.tables.EventType.editdata', compact('type'));
    }

    public function update(EventTypeStoreRequest $request, EventType $type)
    {
        $type->update($request->validated());
        return to_route('types.index');
    }

    public function destroy(EventType $type)
    {
        $type->delete();
        return to_route('types.index');
    }
}
