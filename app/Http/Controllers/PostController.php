<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $topCategories = $this->getCategoryStats();

        $recentPosts = $this->getRecentPosts();
        $posts = Post::paginate(6);

        return view('Home.Posts.blog-grid', compact('posts', 'topCategories', 'recentPosts')); // Passer la variable $topCategories à la vue
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('title', 'like', "%$query%")
            ->orWhere('category', 'like', "%$query%")
            ->orWhere('body', 'like', "%$query%")
            ->paginate(6);

        $topCategories = $this->getCategoryStats();
        $recentPosts = $this->getRecentPosts();

        return view('Home.Posts.blog-grid', compact('posts', 'topCategories', 'recentPosts', 'query'));
    }



    public function show($id)
    {

        $topCategories = $this->getCategoryStats();
        $recentPosts = $this->getRecentPosts();
        $article = Post::findOrFail($id);

        return view('Home.Posts.blog-single', compact('article', 'topCategories', 'recentPosts'));
    }




    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'category' => 'required|string',
            'body' => 'required|string',
            'image' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post = Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'string',
            'category' => 'string',
            'body' => 'string',
            'image' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('blogPage', $id)->with('success', 'Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('blogPage')->with('success', 'Post deleted successfully');
    }


    public function getRecentPosts()
    {
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return $recentPosts;
    }


    public function getCategoryStats()
    {
        $topCategories = DB::table('posts')
            ->select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->orderByDesc('count')
            ->take(6)
            ->get();

        return $topCategories;
    }
}
