<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    function index()
    {
        return view('feedback.feedback');
    }

    function create(Request $request)
    {
        $data = $request->validate([
            'feedback' => 'required|min:5|max:255',
            'rating' => 'required|numeric|min:1|max:5'
        ], [
            'feedback.required' => 'Feedback is required',
            'feedback.min' => 'Feedback must be at least 5 characters',
            'feedback.max' => 'Feedback must be at most 255 characters',
            'rating.required' => 'Rating is required',
            'rating.numeric' => 'Rating must be a number',
            'rating.min' => 'Rating must be at least 1',
            'rating.max' => 'Rating must be at most 5',
        ]);
        $data['user_id'] = auth()->user()->id;
        $feedback = Feedback::create($data);
        if ($feedback) {
            return view('feedback.success');
        }

        return redirect()->route('feedback')->withErrors(['feedback' => 'Something went wrong']);
    }
}
