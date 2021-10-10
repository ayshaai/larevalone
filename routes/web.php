<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/services', function () {
//  return view('services');
  
// });

Route::get('/services/{name}', function ($name) {
 
     
   });
   Route::get('/products','ProductsController@showfirst');
   Route::get('/products/{id}','ProductsController@show');
   //to show direct view
   Route::view('view1','myview');