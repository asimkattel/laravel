<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

     return view('auth.register');
    }
    public function store(Request $request)
    {

         //validation
        $this->validate($request,[
            'name'=>'required|string|max:100',
            'username'=>'required|string|max:100|unique:users',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:6|confirmed'
        ]);

        //inserting in database
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //login the user
        //auth()->attempt($request->only('username','password'));

        //redirect to dashboard
        return redirect("/login");


    }
}