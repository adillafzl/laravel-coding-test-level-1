<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Support\Str;

class EventRepository
{

    public function all()
    {
        return Event::all();
    }

    public function active()
    {
        return Event::whereDate('startAt', '<=', now())->whereDate('endAt', '>=', now())->get();
    }

    public function show($id)
    {
        return Event::find($id);
    }

    public function store($request)
    {
        $event = Event::create([
            'name' =>  $request->name,
            'slug' => Str::slug($request->name, '-'),
            'startAt' => $request->startAt,
            'endAt' => $request->endAt,
        ]);

        return $event;
    }

    public function update($request, $id)
    {
        $event = Event::find($id)->update([
            'name' =>  $request->name,
            'slug' => Str::slug($request->name, '-'),
            'startAt' => $request->startAt,
            'endAt' => $request->endAt,
        ]);

        return $event;
    }

    public function destroy($id)
    {

        return Event::destroy($id);
    }
}
