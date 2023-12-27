<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $favorites = Favorite::where('user_id', Auth::user()->id)->get();
        $file_id = $favorites->pluck('file_id');
        $files = File::whereIn('id', $file_id)->orderByDesc('created_at')->paginate(6);
        return view('home.favorite', compact('files'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'file_id' => 'required|integer',
        ]);
        $data['user_id'] = auth()->user()->id;
        if (Favorite::where('user_id', $data['user_id'])->where('file_id', $data['file_id'])->exists()) {
            return redirect()->back()->with('error', 'File is already added to favorites.');
        }
        Favorite::create($data);
        return redirect()->back()->with('success', 'File added to favorites.');
    }

    public function destroy(Request $request)
    {
        $data = $request->validate([
            'file_id' => 'required|integer',
        ]);
        $data['user_id'] = auth()->user()->id;

        $favorite = Favorite::where('user_id', $data['user_id'])->where('file_id', $data['file_id'])->first();
        if (!$favorite->exists()) {
            return redirect()->back()->with('error', 'File is not in favorites.');
        }
        $favorite->delete();
        return redirect()->back()->with('success', 'File removed from favorites.');
    }
}
