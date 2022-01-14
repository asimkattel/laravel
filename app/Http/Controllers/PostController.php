<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        //listing all posts from database--load maa vako string ra function ko name match huna parxa
        $posts = Post::all()->load('user')->sortByDesc('created_at');

        //sending data to view
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'caption' => 'required|string'

        ]);
        $user = auth()->user();
        if ($user == null) return back()->withErrors(['error' => 'Login in first']);

        //save part
        $post = new Post();
        $post->caption = $request->caption;
        $post->user_id = $user->id;
        $post->save();

        return redirect('/posts');
    }
}
