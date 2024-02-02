<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('users.home', ['users' => $users]);
    }
    public function posts(User $user)
    {
        $allPosts = $user->post;
        return view('users.userposts', compact('allPosts'));
    }
      public function destroy (User $user)
        {
            $user->delete();
            return redirect('/');
        }
}
