<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/posts');
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function destroy(Request $request) {
        auth()->logout();
        $request->session()->invalidate();

        return redirect('/posts');
    }
}
