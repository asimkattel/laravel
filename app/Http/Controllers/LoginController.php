<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        //checks uname and pw in database
        $isLoggedIn = auth()->attempt($request->only('username', 'password'));

        if ($isLoggedIn)
            return redirect("/dash");
        else
            return back()->withErrors(['error_message' => 'invalid username or password']);
    }
}
