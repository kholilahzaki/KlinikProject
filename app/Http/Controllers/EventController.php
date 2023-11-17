<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index(){
        $acara = Event::all();
        //$events = 'ini halaman acara';
        return view('Event.index', compact('acara'));
    }

    public function create(){
        return view('Event.create');
    }

    public function store(Request $request){

        $request->validate([
                'e_tglAcara' => 'required',
                'e_namaAcara' => 'required',
                'e_lokasiAcara' => 'required',
            ]);

        $event = new Event;
        $event->e_tglAcara = $request->e_tglAcara;
        $event->e_namaAcara = $request->e_namaAcara;
        $event->e_lokasiAcara = $request->e_lokasiAcara;

        $event->save();

        return redirect('Event');
    }
}
