<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function updateUsername(Request $request)
    {
        $original = auth()->user()->username;
        if ($original == $request->username) {
            return redirect()->back()->withErrors([
                'username' => 'Same Username!',
            ]);
        }
        $request->validate([
            'username' => 'required|max:50|string|unique:users',
        ]);
        User::where('id', Auth::id())->update([
            'username' => $request->username,
        ]);
        return redirect()->back()->with('success', 'Username changed successfully!');
    }

    public function updateBio(Request $request)
    {
        $original = auth()->user()->bio;
        if ($original == $request->bio) {
            return redirect()->back()->withErrors([
                'bio' => 'Same Bio!',
            ]);
        }
        $request->validate([
            'bio' => 'required|max:255',
        ]);
        User::where('id', Auth::id())->update([
            'bio' => $request->bio,
        ]);
        return redirect()->back()->with('success', 'Bio changed successfully!');
    }

    public function updateImgae(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if ($request->hasFile('image')) {
            $original = auth()->user()->image;
            if ($original !== 'default.jpg') {
                Storage::delete('public/' . $original);
            }
            $newImage = $request->file('image')->store('user_images', 'public');
            User::where('id', Auth::id())->update([
                'image' => $newImage,
            ]);

            return redirect()->back()->with('success', 'Image changed successfully!');
        }

        return redirect()->back()->with('error', 'Please select an Image first!');
    }

    public function deleteImgae(Request $request)
    {
        $original = auth()->user()->image;
        $user = User::where('id', Auth::id())->first();

        if ($original == 'default.jpg') {
            return redirect()->back()->with('error', 'You can not delete default image!');
        }
        Storage::delete('public/' . $original);
        $user->image = 'default.jpg';
        $user->save();
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:4|max:16',
            'new_password' => 'required|min:4|max:16|confirmed',
        ],[
            'current_password.required' => 'Current password is required',
            'new_password.required' => 'New password is required',
            'new_password.confirmed' => 'New password does not match',
            'new_password.min' => 'New password must be at least 4 characters',
            'new_password.max' => 'New password must be at most 16 characters',
            'current_password.min' => 'Current password must be at least 4 characters',
            'current_password.max' => 'Current password must be at most 16 characters',
        ]);
        $user = User::where('id', Auth::id())->first();

        if (password_verify($request->current_password, $user->password)) {
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->back()->with('success', 'Password changed successfully!');
        }

        return redirect()->back()->withErrors([
            'current_password' => 'Wrong Password!',
        ]);
    }

    public function getUserDetail(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        return response()->json([
            'user' => $user,
        ]);
    }
}
