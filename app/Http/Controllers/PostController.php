<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Media;
use App\Models\Reaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
public function index()
{
    $posts = \App\Models\Post::with(['media', 'user',/*'reactions.user',*/ 'comments.user', 'comments.replies.user'])->latest()->paginate(10);
    return view('posts.index', compact('posts'));
}

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:4000',
            'media.*' => 'file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:30720', // Max 30MB per file
        ]);

        $post = \App\Models\Post::create([
            'user_id' => \Illuminate\Support\Facades\Auth::user()->id,
            'description' => $request->description,
        ]);

         if (($request->hasFile('media'))) {
            foreach ($request->file('media') as $file) {
                $originalFileName = $file->getClientOriginalName();
                $path = $file->store('media', 'public'); // only 'media', not 'public/media'
                Media::create([
                    'post_id' => $post->id,
                    'file_path' => '/storage/' . $path, // manually build the correct URL
                    'file_name' => $originalFileName,
                    'type' => str_starts_with($file->getMimeType(), 'video') ? 'video' : 'image',
                ]);
            }
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
        

    public function react(Request $request, $postId)
    {
        $request->validate([
            'type' => 'required|string'
        ]);

        $post = Post::findOrFail($postId);

        $reaction = Reaction::updateOrCreate(
            ['user_id' => Auth::id(), 'post_id' => $post->id],
            ['type' => $request->type]
        );

        return response()->json(['success' => true, 'reaction' => $reaction]);
    }
// Note: Ensure that the 'media' directory exists in your 'storage/app/public' directory
}