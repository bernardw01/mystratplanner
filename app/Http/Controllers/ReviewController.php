<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        //
        return view('reviews.create',compact('id'));
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

        $review = new Review;

        $review->review_period_start = request('review_period_start');
        $review->review_period_end = request('review_period_end');
        $review->review_text = request('review_text');
        $review->user_id = request('user_id');
        $review->reviewer_id = request('reviewer_id');
        $review->rating = request('rating');
        $review->review_status = request('review_status');
        $review->last_user = request('user_email');


        $review->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
        return view('reviews.show', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
        $review->review_period_start = request('review_period_start');
        $review->review_period_end = request('review_period_end');
        $review->review_text = request('review_text');
        $review->user_id = request('user_id');
        $review->reviewer_id = request('reviewer_id');
        $review->rating = request('rating');
        $review->review_status = request('review_status');
        $review->review_type = request('review_type');
        $review->last_user = request('user_email');


        $review->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
        $review->delete();
        return redirect('home');

    }
}
