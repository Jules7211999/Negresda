<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterAdmin extends Controller
{
    public function index(){
        return view('Admin.home');
    }
}
