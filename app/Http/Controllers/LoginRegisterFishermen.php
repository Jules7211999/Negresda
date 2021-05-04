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
            
        $this->validate($request,[
                'username' => 'required|max:255',
                'password' => 'required|max:255'
            ]);

                if(!auth()->attempt($request->only('username','password'))){
                   dd("invalid");
                }
               
               
            
     }
    public function Register(Request $request){
       
      $this->validate($request,[
             'name' => 'required|max:255',
             'username' => 'required|max:255',
             'password' => 'required|confirmed|max:255',
             'email' => 'required|email|max:255',
            ]);

            

         User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' =>Hash::make($request-> password),
            'email' => $request->email
         ]);   

        return redirect()->route('FL');
    }
}
