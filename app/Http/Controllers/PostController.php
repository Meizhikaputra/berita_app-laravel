<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('name', request('category'));
            $title = 'in : ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('name', request('user'));
            $title = 'By : ' . $user->name;
        }

        return view('posts', [
            "title" => "All Posts $title",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            "title" => "Post",
            "active" => 'posts',
            "post" => $post,
        ]);
    }
}
