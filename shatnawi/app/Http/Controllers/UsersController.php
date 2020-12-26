<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login_get(){
        return view("auth.login");
    }

    public function login_post(Request $request){

        $remember=$request->has("remember")? true:false ;
        if(auth()->attempt(['email' => request('email'), 'password' => request('password')], $remember)){
            return view ('index');
        }
        else{
            return back();
        }
    }

}
