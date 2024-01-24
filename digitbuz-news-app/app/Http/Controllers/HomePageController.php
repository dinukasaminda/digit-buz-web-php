<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $recentPosts = Post::orderBy('created_at', 'desc')->take(5)->get();


        // Pass the random posts to the welcome view
        return view('welcome', ['recentPosts' => $recentPosts]);
    }
}
