<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
class GuestController extends Controller
{
    public function create() {
        return view('guests.create');
    }
    
     public function add(Request $request) {
        $guest = new Guest(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'company' => $request->get('company'),
            'topic' => $request->get('topic'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
        ));

        $guest->save();
        return redirect('/guest/view')->with('status', 'Guest Speaker created successfully!');
    }
    
    public function view() {
        $id = 1;
        $guests = Guest::all()->sortByDesc('date');
        return view('guests.view',  compact('guests','id'));
    }
    
    public function edit($id) {
        $guest = Guest::whereId($id)->firstOrFail();
        return view('guests.edit', compact('guest'));
    }

    public function update($id, Request $request) {
        $guest = Guest::whereId($id)->firstOrFail();
        $guest->name = $request->get('name');
        $guest->email = $request->get('email');
        $guest->phone = $request->get('phone');
        $guest->company = $request->get('company');
        $guest->topic = $request->get('topic');
        $guest->facebook = $request->get('facebook');
        $guest->twitter = $request->get('twitter');
        $guest->instagram = $request->get('instagram');
        $guest->save();
        return redirect(action('GuestController@edit', $guest->id))->with('status', 'The Guest Speakers Details has been updated!');
    }
}
