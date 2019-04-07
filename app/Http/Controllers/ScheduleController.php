<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Date;
class ScheduleController extends Controller
{
     public function create() {
         $dates = Date::all();
        return view('schedules.create', compact('dates'));
    }
    
     public function add(Request $request) {
        $schedule = new Schedule(array(
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'start' => $request->get('start'),
            'end' => $request->get('end'),
            'speaker' => $request->get('speaker'),
            'company' => $request->get('company'),
            'topic' => $request->get('topic'),
            'description' => $request->get('description'),
        ));

        $schedule->save();
        return redirect('/schedule/view')->with('status', 'Schedule created successfully!');
    }
    
    public function view() {
        $id = 1;
        $schedules = Schedule::all()->sortByDesc('date');
        return view('schedules.view',  compact('schedules','id'));
    }
    
    public function edit($id) {
        $dates = Date::all();
        $schedule = Schedule::whereId($id)->firstOrFail();
        return view('schedules.edit', compact('schedule','dates'));
    }

    public function update($id, Request $request) {
        $schedule = Schedule::whereId($id)->firstOrFail();
        $schedule->name = $request->get('name');
         $schedule->date = $request->get('date');
        $schedule->start = $request->get('start');
        $schedule->end = $request->get('end');
        $schedule->speaker = $request->get('speaker');
        $schedule->company = $request->get('company');
        $schedule->topic = $request->get('topic');
        $schedule->description = $request->get('description');
        $schedule->save();
        return redirect(action('ScheduleController@edit', $schedule->id))->with('status', 'The Schedule Details has been updated!');
    }
}
