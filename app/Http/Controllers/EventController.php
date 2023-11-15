<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $event = Event::all();
        return view('Event.index', compact(['event']));
    }

    public function create(){
        return view('Event.create');
    }

    public function store(Request $request){

        EventController::create($request->all());
    }
}
