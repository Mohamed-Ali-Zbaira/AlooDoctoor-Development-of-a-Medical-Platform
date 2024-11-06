<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Importation de Log
use Illuminate\Support\Facades\Auth; // Importation de Auth

class PublicationController extends Controller
{
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
        return redirect()->route('blogPage')->with('success', 'Post created successfully.');
    }
}