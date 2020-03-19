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
})->name('home');

Route::get('/about-us', function () {
    return view('pages/about_us');
})->name('about-us');

Route::get('/purchase-price', function () {
    return view('pages/purchase_price');
})->name('purchase-price');

Route::get('/documents', function () {
    return view('pages/documents');
})->name('documents');

Route::get('/offers', function () {
    return view('pages/offers');
})->name('offers');

Route::get('/offers/{id}', function () {
    return view('pages/single_offer');
})->name('offers.single-offer');

Route::get('/news', function () {
    return view('pages/news');
})->name('news');

Route::get('/news/{id}', function () {
    return view('pages/single_news');
})->name('news.single-news');

Route::get('/contacts', function () {
    return view('pages/contacts');
})->name('contacts');



// Route::get('/', 'UsersController@index');
// Route::post('/users/fileupload/', 'UsersController@fileUpload')->name('users.fileupload');
