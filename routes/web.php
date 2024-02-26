<?php

use App\Http\Controllers\GuitarsController;
use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class,  'index'] )->name('home.index');

Route::get('/about/about', [HomeController::class,  'about'])->name('home.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('guitars' , GuitarsController::class);


Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {

    if (isset($category)) {

        if(isset($item)){
            return "you are viewing the store for {$category} for {$item}";
        }

        return 'you are viewing the store for ' . strip_tags($category);
    }
    return 'you are view all instrument';
});


// Route::get('/store', function () {
//     $category = request('category');

//     if (isset($category)) {

//         return 'Your category page  ' . strip_tags($category);
//     }
//     return 'you are view all instrument';
// });


