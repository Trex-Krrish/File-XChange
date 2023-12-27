<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\File;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $comments = Comment::where('file_id', $id)->orderByDesc('created_at')->get();
        return view('home.comment', compact('comments', 'id'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->validate([
            'comment' => ['required', 'max:100', 'min:2']
        ], [
            'comment.required' => 'Comment can not be empty',
            'comment.max' => 'Comment must be less than 100 characters',
            'comment.min' => 'Comment must be more than 2 characters'
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['file_id'] = $id;

        Comment::create($data);
        return redirect()->back()->with('success', 'Comment added successfully');
    }

    public function destroy(Request $request)
    {
        $data['id'] = $request->comment_id;
        

        $comment = Comment::where($data)->first();
        if ($comment) {
            $comment->delete();
            return redirect()->route('comments.index')->with('success', 'Comment deleted successfully');
        }
        return redirect()->route('comments.index')->with('error', 'Comment not found');
    }
}
