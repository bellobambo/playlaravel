<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'hello';
});

Route::get('/about', function () {
    return 'About Page';
});


Route::get('/store', function () {
$category = request('category');
return 'Your category page  ' . strip_tags($category) ;
});


