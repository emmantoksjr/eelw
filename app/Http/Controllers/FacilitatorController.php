<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facilitator;
class FacilitatorController extends Controller
{
    public function create() {
        return view('facilitators.create');
    }
    
     public function add(Request $request) {
        $facilitator = new Facilitator(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'company' => $request->get('company'),
            'topic' => $request->get('topic'),
            'topic' => $request->get('topic'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
        ));

        $facilitator->save();
        return redirect('/facilitator/view')->with('status', 'Facilitator created successfully!');
    }
    
    public function view() {
        $id = 1;
        $facilitators = Facilitator::all()->sortByDesc('date');
        return view('facilitators.view',  compact('facilitators','id'));
    }
    
    public function edit($id) {
        $facilitator = Facilitator::whereId($id)->firstOrFail();
        return view('facilitators.edit', compact('facilitator'));
    }

    public function update($id, Request $request) {
        $facilitator = Facilitator::whereId($id)->firstOrFail();
        $facilitator->name = $request->get('name');
        $facilitator->email = $request->get('email');
        $facilitator->phone = $request->get('phone');
        $facilitator->company = $request->get('company');
        $facilitator->topic = $request->get('topic');
        $facilitator->facebook = $request->get('facebook');
        $facilitator->twitter = $request->get('twitter');
        $facilitator->instagram = $request->get('instagram');
        $facilitator->save();
        return redirect(action('FacilitatorController@edit', $facilitator->id))->with('status', 'The Facilitator Details has been updated!');
    }
}
