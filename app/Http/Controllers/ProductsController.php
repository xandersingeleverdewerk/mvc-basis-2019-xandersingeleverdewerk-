<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ophalen van alle producten
        $products = Product::all();

        // een view returnen en de variabele $products meesturen naar de view
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        // aanmaken van een nieuw product (met behulp van de Model)
        $product = new Product();
        // attributen
        $product->productname = $request->productname;
        $product->description = $request->description;
        $product->price = $request->price;
        // product bewaren in de database (insert uitvoeren)
        $product->save();

        return redirect()->route('products.index')->with('message', 'Product aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // attributen
        $product->productname = $request->productname;
        $product->description = $request->description;
        $product->price = $request->price;
        //product bewaren in de database (update uitvoeren)
        $product->save();

        return redirect()->route('products.index')->with('message', 'Product geupdate');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product)
    {
        return view('products.delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Product verwijderd');
    }
}
