<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Tag;
use Blog\Post;
use Blog\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quantidade['posts'] = Post::where('active', 1)->count();
        $quantidade['comments'] = Comment::where('active', 1)->count();
        $quantidade['tags'] = Tag::where('active', 1)->count();
        return view('home', ['quantidade' => $quantidade]);
    }
}
