@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
         <form method="POST">
             {{csrf_field()}}
             <div class="mb-4">
                 <label class="">Name</label>
                 <input required type="text" name="name" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                 <label class="">username</label>
                 <input  required type="text" name="username" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1" placeholder="Enter your username">
            </div>
            <div class="mb-4">
                 <label class="">Email</label>
                 <input  required type="email" name="email" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1" placeholder="Enter your email">
            </div>
            <div class="mb-4">
                 <label class="">Password</label>
                 <input required  type="password" name="password" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1" placeholder="Enter your password">
            </div>
            <div class="mb-4">
                 <label class="">Confirm password</label>
                 <input  required type="password" name="password_confirmation" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1" placeholder="Enter your password again">
            </div>
            <div class="mb-4">
                <button class="bg-blue-500 border-2 w-full p-2 text-white rounded-lg " >Register</button>
                 </div>
        </form>
    </div>
</div>

@endsection