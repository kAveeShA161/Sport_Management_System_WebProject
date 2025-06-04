<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reaction;
use Illuminate\Support\Facades\Auth;


class ReactionController extends Controller
{
    
    public function react(Request $request, $postId)
    {
        $request->validate([
            'type' => 'required|string|in:like,love,haha,wow,sad,angry'
        ]);

        $reaction = Reaction::updateOrCreate(
            ['post_id' => $postId, 'user_id' => Auth::id()],
            ['type' => $request->type]
        );

        return response()->json(['success' => true, 'reaction' => $reaction]);
    }


    public function storeReaction(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'type' => 'required|in:like,heart,care,laugh,surprise,sad,celebrating'
        ]);

        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'User not authenticated'], 401);
        }
        $userId = $user->id;
        $existingReaction = Reaction::where('user_id', $userId)
            ->where('post_id', $request->post_id)
            ->first();

        if ($existingReaction) {
            // Update the reaction type
            $existingReaction->type = $request->type;
            $existingReaction->save();
        } else {
            Reaction::create([
                'user_id' => $user->id,
                'post_id' => $request->post_id,
                'type' => $request->type
            ]);
        }

        return response()->json(['message' => 'Reaction stored successfully']);
    }


    public function removeReaction(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);
        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'User not authenticated'], 401);
        }
        $reaction = Reaction::where('user_id', $user->id)
            ->where('post_id', $request->post_id)
            ->first();

        if ($reaction) {
            $reaction->delete();
            return response()->json(['message' => 'Reaction removed successfully']);
        }

        return response()->json(['message' => 'No reaction found'], 404);
    }


}
