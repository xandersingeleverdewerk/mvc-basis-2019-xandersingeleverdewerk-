<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;
use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewsRequest $request)
    {
        // gegevens valideren
        $validated = $request->validated();

        // model aanmaken: gegevens in db opslaan
        $review = new Review();
        $review->title = $request->title;
        $review->username = $request->username;
        $review->body = $request->body;
        $review->rating = $request->rating;
        $review->save();

        // terug naar overzicht gaan met melding
        return redirect('/reviews')->with('status', 'reviews toegevoegd');
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
        return view('reviews.show', compact('review'));
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
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewsRequest $request, Review $review)
    {
        //
        $validated = $request->validated();

        //model aanmaken: gegevens in db opslaan
        $review->title = $request->title;
        $review->username = $request->username;
        $review->body = $request->body;
        $review->rating = $request->rating;
        $review->save();

        //terug naar overzicht gaan met melding
        return redirect('/reviews')->with('status', 'reviews gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function delete(Review $review)
    {
        return view('reviews.delete', compact('review'));
    }

    public function destroy(Review $review)
    {
        //
        $review->delete();
        return redirect('/reviews')->with('status', 'review verwijderd');
    }
}
