<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());

        return $request->input('title');
    }
}
