<?php

namespace App\Http\Controllers;

use App\Team;
use \App\Goal;
use \App\Review;
use \App\Comment;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($request->user()->id);
        //dd(Goal::where('user_id', $request->user()->id));
        $goals = Goal::where('team_id', $id)->get();
        $reviews = Review::where('team_id', $id)->get();
        $comments = Comment::where('team_id', $id)->get();

        //dd($goals);
        return view('teams.index', compact('goals','reviews', 'comments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        //
        return view('teams.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd(request()->all());

        $team = new Team;

        $team->team_name = request('team_name');
        $team->team_lead_id = request('team_lead_id');
        $team->last_user = request('user_email');


        $team->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
