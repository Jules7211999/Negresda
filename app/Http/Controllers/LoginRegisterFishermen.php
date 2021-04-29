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
}
