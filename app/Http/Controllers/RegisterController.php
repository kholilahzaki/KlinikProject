<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:admins|min:4|max:12',
            'password' => 'required|min:5|max:15'
        ]);

        Admin::create($validatedData);
    }
}
