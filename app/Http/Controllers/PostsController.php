<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts(Post $posts)
    {
        $posts = Post::all();
        return view('/posts', ['posts' => $posts]);
    }



    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'title' => 'required',
            'body' => 'required',
            'author' => 'required',

        ]);

        Post::create($data);

        return redirect(route('post.index'));
    }

    public function singlepost(Post $post)
    {
        return view('post', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('edit', ['post' => $post]);
    }
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([

            'title' =>[ 'required','max:15'],
            'body' => ['required','max:15'],
           

        ]);
        $post->update($data);
        return redirect('/');
    }

      public function destroy (Post $post)
        {
$post->delete();
            return redirect (route('post.index'));
        }
}
