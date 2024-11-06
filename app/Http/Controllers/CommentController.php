<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Affiche les commentaires d'une publication.
     *
     * @param  int  $postId
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($postId)
    {
        $post = Post::findOrFail($postId);

        $comments = $post->comments()->with('user')->get();

        return response()->json(['comments' => $comments], 200);
    }


    /**
     * Ajoute un nouveau commentaire à une publication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $postId
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $postId)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed', 'errors' => $validator->errors()], 400);
        }

        $user = Auth::user();

        $post = Post::find($postId);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }
        if (!$user) {
            return response()->json(['error' => 'user not found'], 404);
        }

        $comment = $post->comments()->create([
            
            'body' => $request->input('body'),
            'user_id' => $user->id,
            'post_id'=>$post->id,
        ]);

        return response()->json(['comment' => $comment], 201);
    }

    /**
     * Met à jour un commentaire existant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $commentId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $commentId)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed', 'errors' => $validator->errors()], 400);
        }

        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json(['error' => 'Comment not found'], 404);
        }

        $comment->body = $request->input('body');
        $comment->save();

        return response()->json(['comment' => $comment], 200);
    }

    /**
     * Supprime un commentaire existant.
     *
     * @param  int  $commentId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($commentId)
    {
        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json(['error' => 'Comment not found'], 404);
        }

        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully'], 200);
    }
}
