<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    $hour = date('G');

    if ( $hour >= 5 - 2  && $hour <= 11 - 2 ) {
        $greeting = "Goedemorgen";
    } else if ( $hour >= 12 - 2 && $hour <= 17 - 2) {
        $greeting = "Goedemiddag";
    } else if ( $hour >= 18 - 2 || $hour <= 4 - 2) {
        $greeting = "Goedenavond";
    }
   return view('greeting', compact('greeting'));
});

Route::get('/books2', function() {
   $books = DB::table('books')->get();

   return view('books2', compact('books'), compact('catogories'));
});

Route::get('/products/{product}/delete', 'ProductsController@delete')
                         ->name('products.delete');
Route::resource('/products', 'ProductsController');

Route::get('/reviews/{reviews}/delete', 'ReviewsController@delete');
Route::resource('/reviews', 'ReviewsController');

Route::get('/books/{book}/delete', 'BooksController@delete')
                         ->name('books.delete');
Route::resource('/books', 'BooksController');

Route::get('/categories/{categories}/delete', 'CategoriesController@delete');
Route::resource('/categories', 'CategoriesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
