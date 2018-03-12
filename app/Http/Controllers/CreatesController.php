<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\User;

class CreatesController extends Controller
{
    //User

    public function user()
    {
        $user = Auth::user();
        $events = Event::all();

        return view('dashboard', ['user' => $user, 'events' => $events]);
    }

    public function updateUser() {
        $user = Auth::user();

        return view('update_user', ['user' => $user]);
    }

    public function editUser(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'Phone' => 'required',
            'Firstname' => 'required',
            'Lastname' => 'required',
            'Gender' => 'required',
            'Country' => 'required',
            'State' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'PostalCode' => 'required',
            'Description' => 'required'
        ]);

        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'Phone' => $request->input('Phone'),
            'Firstname' => $request->input('Firstname'),
            'Lastname' => $request->input('Lastname'),
            'Gender' => $request->input('Gender'),
            'Country' => $request->input('Country'),
            'State' => $request->input('State'),
            'City' => $request->input('City'),
            'Address' => $request->input('Address'),
            'PostalCode' => $request->input('PostalCode'),
            'Description' => $request->input('Description')
        );
        User::where('id', $id)->update($data);

        return redirect('/dashboard')->with('info', 'Profile Updated Successfully');
    }

    public function deleteUser() {
        Auth::user()->delete();

        return redirect('/')->with('info', 'User Deleted');;
    }

    //Events

    public function insertEvent(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'date' => 'required',
            'place' => 'required',
            'state' => 'required',
            'starttime' => 'required',
            'endtime' => 'required'
        ]);

        $event = new Event;

        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->category = $request->input('category');
        $event->date = $request->input('date');
        $event->place = $request->input('place');
        $event->starttime = $request->input('starttime');
        $event->endtime = $request->input('endtime');
        $event->save();

        return redirect('/dashboard')->with('info', 'Event Created Succsessfully');
    }

    public function updateEvent($id) {
        $event = Event::find($id);

        return view('update_event', ['event' => $event]);
    }

    public function editEvent(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('description'),
            'date' => $request->input('description'),
            'place' => $request->input('description'),
            'starttime' => $request->input('description'),
            'endtime' => $request->input('description')
        );
        Event::where('id', $id)->update($data);

        return redirect('/dashboard')->with('info', 'Event Updated Successfully');
    }

    public function deleteEvent($id) {
        Event::where('id', $id)->delete();

        return redirect('/dashboard')->with('info', 'Event Deleted');
    }
}
