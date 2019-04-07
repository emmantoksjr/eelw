<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class DateController extends Controller {

    public function create() {
        return view('dates.create');
    }

    public function add(Request $request) {
        $date = new Date(array(
            'date' => $request->get('date'),
        ));

        $date->save();
        return redirect('/date/view')->with('status', 'Date created successfully!');
    }

    public function view() {
        $id = 1;
        $dates = Date::all()->sortByDesc('date');
        return view('dates.view', compact('dates', 'id'));
    }

    public function edit($id) {
        $date = Date::whereId($id)->firstOrFail();
        return view('dates.edit', compact('date'));
    }

    public function update($id, Request $request) {
        $date = Date::whereId($id)->firstOrFail();
        $date->date = $request->get('date');
        $date->save();
        return redirect(action('DateController@edit', $date->id))->with('status', 'The Event Date has been updated!');
    }

}
