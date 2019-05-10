<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\http\Requests\UpdateCategoriesRequest;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesRequest $request)
    {
        // gegevens valideren
        $validated = $request->validated();

        // model aanmaken: gegevens in db opslaan
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        // terug naar overzicht gaan met melding
        return redirect('/categories')->with('status', 'categories toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('categories.show', compact('reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        //
        $validated = $request->validated();

        // model aanmaken: gegevens in db opslaan
        $category->name = $request->name;
        $category->save();

        // terug naar overzicht gaan met melding
        return redirect('/categories')->with('status', 'categories gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete (Category $category)
    {
        return view('categories.delete', compact('category'));
    }

    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('/categories')->with('status', 'categories verwijderd');
    }
}
