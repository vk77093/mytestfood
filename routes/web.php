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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('homePage');
});
Route::get('/test', function () {
    return view('homePageSecond');
});
Route::get('/about', 'WebController@about');
Route::get('ourproduct', 'WebController@product');
Route::get('/nationPresent','WebController@present');
Route::get('whoweserve','WebController@whoweserve');
Route::get('/ourbrand','WebController@ourbrand');
Route::get('/yourbrand','WebController@yourbrand');
Route::get('/ourparticipation','WebController@participation');
Route::get('/upcoming','WebController@upcoming');
Route::get('/contact','WebController@contact');
//Route::get('/carrier','WebController@carrier');
Route::resource('/carrier', 'HRDepartment\JobForm');
//Route::resource('/HRdash', 'HRDepartment\JobForm');
Route::get('/dash',function(){
    return view('HandleSection.userDash');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
