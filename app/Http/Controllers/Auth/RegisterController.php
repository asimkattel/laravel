<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    public function index(){

     return view('auth.register');
    }
    public function store(){
        dd("abc");
    }
}