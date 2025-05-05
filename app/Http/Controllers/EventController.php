<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EventStoreRequest;

class EventController extends Controller
{
    public function ApiIndex($id=null)
    {
        if(isset($id)){
            $events = Event::query()
            ->join('event_types as event_type', 'event_type.id', 'events.category_id')
            ->select([
                'events.id',
                'events.title_uz',
                'events.title_eng',
                'events.title_ru',
                'events.content_uz',
                'events.content_eng',
                'events.content_ru',
                'event_type.name_uz as event_type',
                'events.image_path'
            ])->where('category_id', '=', $id)->latest()->paginate(6);
        }else
        $events = Event::query()
            ->join('event_types as event_type', 'event_type.id', 'events.category_id')
            ->select([
                'events.id',
                'events.title_uz',
                'events.title_eng',
                'events.title_ru',
                'events.content_uz',
                'events.content_eng',
                'events.content_ru',
                'event_type.name_uz as event_type',
                'events.image_path'
            ])->latest()->paginate(6);
        return response()->json(['Data' => $events]);
    }
    public function index()
    {
        $events = Event::all();
        return view('adminpanel.tables.Event.events', compact('events'));
    }

    public function create()
    {
        $eventtypes = EventType::all();
        return view('adminpanel.tables.Event.createdata', compact('eventtypes'));
    }

    public function store(EventStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image_path')) {
            $name = $request->file('image_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($name, '.');
            $name = chop($name, $nameWithoutExtension);
            $ext = $request->file('image_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h') . '.' . $ext;
            $request->file('image_path')->move(public_path('images/events/'), $new_name);
            $data['image_path'] = $new_name;
        }
        Event::create($data);
        return to_route('event.index');
    }

    public function edit(Event $event)
    {
        $eventtypes = EventType::all();
        return view('adminpanel.tables.Event.editdata',compact('event','eventtypes'));
    }

    public function update(EventStoreRequest $request, Event $event)
    {
        $data = $request->validated();
        if ($request->hasFile('image_path')) {
            if (isset($event->image_path)) {
                File::delete(public_path('images/events/' . $event->image_path));
            }
            $name = $request->file('image_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($name, '.');
            $name = chop($name, $nameWithoutExtension);
            $ext = $request->file('image_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h') . '.' . $ext;
            $request->file('image_path')->move(public_path('images/events/'), $new_name);
            $data['image_path'] = $new_name;
        }
        $event->update($data);
        return to_route('event.index');
    }

    public function destroy(Event $event)
    {
        if (File::exists(public_path('images/events/' . $event->image_path))) {
            File::delete(public_path('images/events/' . $event->image_path));
        }
        $event->delete();
        return redirect()->route('event.index');
    }
}
