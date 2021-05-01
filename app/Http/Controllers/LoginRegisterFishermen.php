<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterFishermen extends Controller
{
    public function Index(){
        return view('fishermen.index');
    }
    public function LoginIndex(){
        return view('fishermen.login');
    }

    public function RegisterIndex(){
        return view('fishermen.register');
    }

    public function Login(Request $request){
            
        $request->validate([
                'Name' => 'required|max:255',
                'Password' => 'required'
            ]);

            auth()->attempt()->only('Name','Password');
     }
    public function Register(Request $request){
       
        $request->validate([
             'Name' => 'required|max:255',
             'Username' => 'required|max:255',
             'Password' => 'required|confirmed|max:255',
             'Email' => 'email'
            ]);
    }
}
