<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Récupérer les trois derniers posts
        $latestPosts = Post::latest()->take(3)->get();

        return view('Home.Index', compact('latestPosts'));
    }
}
