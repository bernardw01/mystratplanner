<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \App\Goal;
use \App\Review;
use \App\Comment;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
    public function show(User $user)
    {

        $goals = Goal::where('user_id', $user->id)->get();
        $reviews = Review::where('user_id', $user->id)->get();
        $comments = Comment::where('user_id', $user->id)->get();

        return view('users.show', compact('user', 'goals', 'reviews', 'comments'));
    }

    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->job_title = request('job_title');
        $user->auth_level = request('auth_level');
        $user->last_user = request('user_email');
        $user->address = request('address');
        $user->city = request('city');
        $user->state = request('state');
        $user->zip = request('zip');
        $user->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();

        return redirect('/users');
    }
}
