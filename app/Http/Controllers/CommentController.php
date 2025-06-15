<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a new comment or a reply.
     */
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|string|max:2000',
            'post_id' => 'required|exists:posts,id',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

       

        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
            'parent_id' => $request->parent_id,
            'body' => $request->body,
        ]);

        return back()->with('success', 'Comment posted successfully.');
    }

    public function destroy(Comment $comment)
    {
        $user = Auth::user();

        // Allow only the comment owner or an admin to delete
        if ($comment->user_id !== $user->id && !$user->is_admin) {
            abort(403, 'Unauthorized action. You can only delete your own comments.');
        }

        $comment->delete();

        return back()->with('success', 'Comment deleted successfully.');
    }


    
}
