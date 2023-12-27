<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'username' => 'required|max:50|string|unique:users,username',
            'roll' => 'required|max:255|unique:users,roll',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|max:16|min:4',
        ], [
            'fname.required' => 'First name is required',
            'lname.required' => 'Last name is required',
            'username.required' => 'Username is required',
            'roll.required' => 'Enrollment number is required',
            'roll.unique' => 'Enrollment number is already taken',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('home')->with('success', 'Account created successfully!');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'roll' => 'required|max:50',
            'password' => 'required|max:16|min:4',
        ],[
            'roll.required' => 'Enrollment number is required',
            'roll.exists' => 'The enrollment number is not registered.',
            'password.required' => 'Password is required',
        ]);
        if (auth()->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login successfully!');
        }
        return back()->withErrors([
            'roll' => 'The provided credentials do not match our records.',
        ]);
    }

    public function incrementDownload(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->file_downloaded += 1;
        $user->save();
        return response()->json(['success' => true]);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        $request->session()->forget('first_visit');
        return redirect()->route('home')->with('success', 'Logout successfully!');
    }
}
