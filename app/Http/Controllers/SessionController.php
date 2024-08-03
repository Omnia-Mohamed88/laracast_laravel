<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Add this line
use Illuminate\Auth\SessionGuard;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function create(){
        return view('auth.login');
    }
    public function store(Request $request) // Ensure the Request object is passed
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($attributes)) {
            $request->session()->regenerate(); // Use session() method correctly
            return redirect('/jobs');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    


    public function destroy() {
        Auth::logout();
        return redirect('/login');
    }
    
    }
    
    