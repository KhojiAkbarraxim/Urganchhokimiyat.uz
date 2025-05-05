<?php

namespace App\Http\Controllers;

use App\Models\Apparat;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Requests\ScheduleStoreRequest;

class ScheduleController extends Controller
{

    public function ApiIndex()
    {
        return response()->json([
            'Schedules'=> Schedule::all()
        ]);
    }
    
    public function index()
    {
        $schedules = Schedule::latest()->get();
        return view('adminpanel.tables.schedule.schedules', compact('schedules'));
    }

    public function create()
    {
        $apparats = Apparat::all();
        return view('adminpanel.tables.schedule.createdata',compact('apparats'));
    }

    public function store(ScheduleStoreRequest $request)
    {
        Schedule::create($request->validated());
        return to_route('schedule.index')->with('succes', 'Malumot muvaffaqqiyatli yaratildi');
    }

    public function edit(Schedule $schedule)
    {
        $apparats = Apparat::all();
        return view('adminpanel.tables.schedule.editdata', compact('schedule','apparats'));
    }

    public function update(ScheduleStoreRequest $request,  Schedule $schedule)
    {
        $schedule->update($request->validated());
        return to_route('schedule.index')->with('succes','Malumot muvaffaqqiyatli yangilandi');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return to_route('schedule.index');
    }
}
