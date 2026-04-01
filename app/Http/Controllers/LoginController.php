<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        // validate
        $attribute = request()->validate([
            'email' => ['required', 'email'],
            'password'  => ['required'],
        ]);

        // log the user in
        if(!Auth::attempt($attribute)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, credentials do not match.'
            ]);
        }

        // session regenerate
        request()->session()->regenerate();

        // redirect
        return redirect('/expenses');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/expenses');
    }
}
