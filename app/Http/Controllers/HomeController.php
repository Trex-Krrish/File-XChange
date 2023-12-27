<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (!session()->has('first_visit')) {
            session(['first_visit' => true]);
            return redirect()->route('landing.page');
        } else {
            $files = File::orderByDesc('created_at')->paginate(6);
            return view('home.index', compact('files'));
        }
    }

    public function register()
    {
        return view('home.register');
    }

    public function login()
    {
        return view('home.login');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('home.profile', compact('user'));
    }


    public function about()
    {
        return view('home.about');
    }

    public function howToUse()
    {
        return view('home.how-to-use');
    }

    function landingPage()
    {
        return view('landing-page');
    }
}
