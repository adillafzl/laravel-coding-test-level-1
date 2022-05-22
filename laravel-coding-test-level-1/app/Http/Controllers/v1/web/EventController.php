<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index(Request $request)
    {
        $events = $this->eventRepository->all();
        return view('event.index', [
            'events' => $events,
        ]);
    }

    public function show($id)
    {
        $event = $this->eventRepository->show($id);
        return view('event.show', [
            'event' => $event,
        ]);
    }

    public function create(Request $request)
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'startAt' => 'required|date|after:tomorrow',
            'endAt' => 'required|date|after:startAt',
        ]);

        $this->eventRepository->store($request);
        return redirect()->route('events.index')->with('message', 'Event has been successfully added');
    }

    public function edit($id)
    {
        $event = $this->eventRepository->show($id);
        return view('event.update', [
            'event' => $event,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'startAt' => 'required|date',
            'endAt' => 'required|date|after:startAt',
        ]);

        $this->eventRepository->update($request, $id);
        return redirect()->back()->with('message', 'Event has been successfully updated');
    }

    public function destroy($id)
    {
        $events = $this->eventRepository->destroy($id);
        return redirect()->route('events.index')->with('message', 'Event has been successfully deleted');
    }
}
