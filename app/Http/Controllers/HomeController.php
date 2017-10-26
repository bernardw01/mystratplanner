<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Auth\AuthManager;
use \App\Goal;
use \App\Review;
use \App\Comment;

class HomeController extends Controller
{

    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }

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

        //dd($goals);
        return view('home', compact('goals','reviews', 'comments'));
    }
}
