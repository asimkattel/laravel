@extends('layouts.app')

@section('content')

<div class="flex justify-center">
     <div class="w-4/12 bg-white p-6 rounded-lg">
          <form method="POST">
               {{csrf_field()}}

               @error("error_message")
               <div class="text-red-500 font-bold">!
                         {{$message}}
                    </div>
               @enderror

    
               <div class="mb-4">
                    <label class="">username</label>
                    <input required type="text" name="username" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1 @error('username') border-red-500 @enderror" placeholder="Enter your username">

                    @error("username")
                    <div class="text-red-500 font-bold">!
                         {{$message}}
                    </div>
                    @enderror

               </div>

               <div class="mb-4">
                    <label class="">Password</label>
                    <input required type="password" name="password" class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-1 @error('password') border-red-500 @enderror" placeholder="Enter your password">

                    @error("password")
                    <div class="text-red-500 font-bold">!
                         {{$message}}
                    </div>
                    @enderror

               </div>

               <div class="mb-4">
                    <button class="bg-blue-500 border-2 w-full p-2 text-white rounded-lg ">Login</button>
               </div>

               </form>
     </div>
</div>

@endsection