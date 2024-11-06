<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class publicationAdmin extends Controller
{
    public function getPostsByAuthenticatedUserId()
    {
        $posts = Post::all(); // Récupérer tous les articles
        return view('DashboardSuperAdmin.Blog.blogPage', compact('posts'));
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
        return redirect()->route('blogPageee', $id)->with('success', 'Post updated successfully');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('blogPageee')->with('success', 'Post deleted successfully');
    }
    public function store(Request $request)
    {
        // Step 3: Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // Step 4: Create a new Post instance and save the data to the database
        $post = new Post();
        $post->user_id = Auth::id(); // Get the authenticated user's ID
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->body = $request->input('body');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }

        $post->save();
        // Redirection avec un message de succès
        return redirect()->route('blogPageee')->with('success', 'Post created successfully.');
    }
}
