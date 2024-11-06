<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticsSuperAdminController extends Controller
{
    public function index()
    {
        $topUsers = User::withCount('posts')
            ->orderByDesc('posts_count')
            ->limit(5)
            ->get(['id', 'username', 'posts_count']);

        $recentPosts = Post::orderBy('created_at', 'desc')->limit(5)->get();

        return view('DashboardSuperAdmin.index', compact('topUsers', 'recentPosts'));
    }
    // Méthode pour récupérer les 5 derniers blogs publiés
    public function recentPosts()
    {
        $topUsers = User::withCount('posts')
            ->orderByDesc('posts_count')
            ->limit(5)
            ->get(['id', 'username', 'posts_count']);
        $recentPosts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('DashboardSuperAdmin.index', compact('topUsers', 'recentPosts'));
    }
}
