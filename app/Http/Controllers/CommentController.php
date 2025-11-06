<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
          
        //simple validation
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'comment' => 'required|string|max:500',
        ]);
        return redirect()->back()->with('success', 'Your comment has been submitted successfully!');

    }
  

}
