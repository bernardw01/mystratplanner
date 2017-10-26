<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \App\Goal;
use \App\Review;
use \App\Comment;

class ProfileController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->user()->id);
        //dd(Goal::where('user_id', $request->user()->id));
        $goals = Goal::where('user_id', $request->user()->id)->get();
        $reviews = Review::where('user_id', $request->user()->id)->get();
        $comments = Comment::where('user_id', $request->user()->id)->get();
        $user = $request->user();

        //dd($goals);
        return view('/myprofile', compact('goals', 'reviews', 'comments', 'user'));
    }

    public function show(User $user)
    {
        //
        return view('comments.show', compact('user'));
    }


    public function edit(User $user)
    {
        //
        return view('comments.show', compact('user'));
    }
    //

}
