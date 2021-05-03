<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function Findex(){
        return view('Fishermen.home');
    }

    public function Aindex(){
        return view('Admin.home');
    }
}
