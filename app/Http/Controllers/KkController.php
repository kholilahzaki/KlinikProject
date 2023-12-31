<?php

namespace App\Http\Controllers;

use App\Models\Kk;
use Illuminate\Http\Request;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('KK.list-kk');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('KK.add-kk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kk $kk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kk $kk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kk $kk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kk $kk)
    {
        //
    }
}
