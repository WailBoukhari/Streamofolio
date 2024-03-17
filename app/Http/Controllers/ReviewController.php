<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'review-title' => 'required',
            'review-rating' => 'required|numeric|min:1|max:5',
            'review-comment' => 'required',
        ]);

        // Get the authenticated user
        $user = Auth::user();
        // Create a new review instance
        $review = new Review();
        $review->title = $validatedData['review-title'];
        $review->rating = $validatedData['review-rating'];
        $review->comment = $validatedData['review-comment'];

      
        $review->user_id = $user->id;

        $review->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
