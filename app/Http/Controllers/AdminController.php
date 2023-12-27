<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('getLogin', 'authenticate');
    }

    public function index()
    {
        $totalUser = User::count();
        $totalFile = File::count();
        $filesDownloaded = User::sum('file_downloaded');
        return view('admin.stats', compact('totalUser', 'totalFile', 'filesDownloaded'));
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function users()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    public function files()
    {
        $files = File::orderBy('created_at', 'desc')->get();
        return view('admin.files', compact('files'));
    }

    public function filesDelete(Request $request)
    {
        $file = File::find($request->file_id);
        if ($file) {
            $file->delete();
            return redirect()->route('admin.files')->with('success', 'File Deleted');
        }

        return redirect()->route('admin.files')->with('error', 'Something went wrong');
    }

    public function comments()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return view('admin.comments', compact('comments'));
    }

    public function commentsDelete(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        if ($comment) {
            $comment->delete();
            return redirect()->route('admin.comments')->with('success', 'Comment Deleted');
        }

        return redirect()->route('admin.comments')->with('error', 'Something went wrong');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard')->with('success', 'welcome Admin');
        }

        return back()->with('error', 'Invalid Credentials');
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect()->route('home');
    }

    public function updateEditor(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user) {
            $user->editor = $request->value;
            $user->save();
            return redirect()->route('admin.dashboard')->with('success', 'Role Updated');
        }

        return redirect()->route('admin.dashboard')->with('error', 'Something went wrong');
    }
}
