<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment; 

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Simple validation is fine, but Form Requests are recommended for scaling
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255', // Added max length for email
            'comment' => 'required|string|max:500',
            'product_id' => 'required|exists:products,id', // Added this validation!
            ]);
        
        // NOTE: Ensure App\Models\Comment has the $fillable property set correctly.
        //Creating the comment
        //Works because Comment model must have $fillable:
        Comment::create($request->all());

        // Redirect back to the previous page with a success flash message
        return redirect()->back()->with('success', 'Your comment has been submitted successfully!');
    }

        public function destroy(Comment $comment)
    {
         // Check if the user is logged in AND is an admin
        // if (!auth()->check() || !auth()->user()->is_admin) {
        //     abort(403, 'Unauthorized action.'); 
        // }
        // Using Auth:: instead of auth()->
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized action.'); 
        }


        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }


       

}