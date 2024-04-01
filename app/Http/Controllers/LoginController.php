<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            //Return a la página anterior con el mensaje
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('posts.index', auth()->user()->username);
    }
}
