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
    return view('pages/home');
});

Route::get('/about-us', function () {
    return view('pages/about_us');
});

Route::get('/purchase-price', function () {
    return view('pages/purchase_price');
});

Route::get('/documents', function () {
    return view('pages/documents');
});

// Route::get('/offers', function () {
//     return view('pages/offers');
// });

// Route::get('/news', function () {
//     return view('pages/news');
// });

// Route::get('/contacts', function () {
//     return view('pages/contacts');
// });



// Route::get('/', 'UsersController@index');
// Route::post('/users/fileupload/', 'UsersController@fileUpload')->name('users.fileupload');
