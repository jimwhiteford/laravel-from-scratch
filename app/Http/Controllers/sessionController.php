<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class sessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);

        session()->regenerate();

        if (auth()->attempt($attributes)) {

            return redirect('/')->with('success', 'Welcome Back!');
        }

        // return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);


    }
}
