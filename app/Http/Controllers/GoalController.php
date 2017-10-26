<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $goals = goal::all();

        return view('goals.index', compact('goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        //
        //dd($id);
        return view('goals.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd(request()->all());

        $goal = new Goal;

        $goal->goal_title = request('goal_title');
        $goal->goal_text = request('goal_text');
        $goal->due_date = request('due_date');
        $goal->user_id = request('user_id');
        $goal->goal_status = 'New';

        $goal->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
        return view('goals.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        //

        return view('goals.show', compact('goal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        //
        $goal->goal_text = request('goal_text');
        $goal->goal_title = request('goal_title');
        $goal->due_date = request('due_date');
        $goal->last_user = request('user_email');
        $goal->goal_status = request('goal_status');;
        $goal->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        //
        $goal->delete();
        return redirect('home');
    }
}
