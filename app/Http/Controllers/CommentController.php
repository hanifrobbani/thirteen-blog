<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $blogId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->blog_id = $blogId;
        $comment->user_id = auth()->id();
        $comment->content = $request->content;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
