<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('post.list')->with('posts', $posts);
    }

    public function create()
    {
        return view('post.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body'  => 'required',
        ]);
        $p = $request->all();
        $p['user_id'] = \Auth::user()->id;
        Post::create($p);
        return redirect()->back();
    }
}
