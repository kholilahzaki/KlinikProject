<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => 'required|string|min:4|max:12',
            'password' => 'required|min:5|max:15',
        ]);

        if(Auth::attempt(['username' => $request->username, 'password'=>$request->password]))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors('loginError', 'Login gagal!');
    }

}
