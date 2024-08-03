<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisteredUserController extends Controller
{
    //
    public function create (){
        return view('auth.register');

    }
    public function store (){
        $validatedAttributes=request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required',Password::min(6) , 'confirmed'],
          


        ]);
        $user=User::create($validatedAttributes);
        Auth::login($user);
        return redirect('/jobs');
    }
}
