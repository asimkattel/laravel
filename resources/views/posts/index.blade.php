@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-8 rounded-lg">Posts
        @auth
        <form method="POST">
            {{csrf_field()}}
            <textarea name="caption" class="bg-gray-100 p-2 w-full" placeholder="say whatever the fuck you want, {{auth()->user()->username}}"></textarea>
            @error("caption")
            <div class="text-red-500 font-bold">!
                {{$message}}
            </div>
            @enderror
            <div class="flex justify-end">
                <button class="bg-blue-500 border-2  p-2 text-white rounded-lg ">Post</button>
            </div>
        </form>
        @endauth

        @foreach($posts as $post)

        <div class="p-2 mt-2 bg-gray-100 rounded-lg ">

            <div class="flex">
                <b class="flex-1">{{$post->user->name}}</b>
                <small>{{$post->created_at}}</small>
            </div>
            <hr />

            <div class="flex">

                <p class="flex-1 mt-1">{{ $post->caption }}</p>
                @auth
                <small><button class=" mt-1 text-black ">
                        like({{$post->likes}})
                    </button></small>
                @endauth

            </div>
        </div>
        @endforeach




    </div>

    @endsection