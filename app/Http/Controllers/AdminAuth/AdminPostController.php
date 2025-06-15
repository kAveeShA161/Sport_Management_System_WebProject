<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'media'])->latest()->paginate(10);
        return view('admin.posts.manage', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::with('media')->findOrFail($id);

        // Delete media files
        foreach ($post->media as $media) {
            if (Storage::disk('public')->exists(str_replace('/storage/', '', $media->file_path))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $media->file_path));
            }
            $media->delete();
        }

        $post->delete();

        return redirect()->route('admin.posts.manage')->with('success', 'Post deleted successfully.');
    }
}
