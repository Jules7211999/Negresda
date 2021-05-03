<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            
                if(!auth()->attempt($request->only('Name','Password'))){
                    return back()->with('message',$message);
                }
               
            
     }
    public function Register(Request $request){
       
      $this->validate($request,[
             'Name' => 'required|max:255',
             'Username' => 'required|max:255',
             'password' => 'required|confirmed|max:255',
             'email' => 'email|max:255',
            ]);

            

         User::create([
            'name' => $request->Name,
            'username' => $request->Username,
            'password' =>Hash::make($request-> Password),
            'email' => $request->email
         ]);   

        
    }
}
