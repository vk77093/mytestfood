<?php
use illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/nearYou', 'WebController@nearYou');
//Route::post('/nearYou', 'WebController@searchNear');
Route::get('/ourbrand','WebController@ourbrand');

//dropdown list
Route::get('/yourbrand', 'MKTDepartment\DropdownController@index');

Route::get('/get-state-list', 'MKTDepartment\DropdownController@getStateLists');
Route::get('/get-city-list', 'MKTDepartment\DropdownController@getCityLists');
//Route::get('/yourbrand/create', 'MKTDepartment\DropdownController@createYourBrand');
Route::post('/yourbrand', 'MKTDepartment\DropdownController@storeYourBrand')->name('yourbrand.store');

Route::get('/ourparticipation','WebController@participation');
Route::get('/upcoming','WebController@upcoming');
Route::get('/contact','WebController@contact');
//Route::get('/carrier','WebController@carrier');
Route::resource('/carrier', 'HRDepartment\JobForm');
Route::resource('/Become-A-Member', 'MKTDepartment\MemberController');

Route::group(['middleware' => 'HRdepartment','as'=> 'HRdepartment'], function () {
    Route::get('/HRdash', 'HRDepartment\JobForm@Hrdash');
    Route::get('/HRdashJob', 'HRDepartment\JobForm@HrdashJob');
    Route::resource('/HrJob', 'HRDepartment\JobAdd');
    Route::get('/position', 'HRDepartment\JobAdd@position');
    Route::get('/position/create', 'HRDepartment\JobAdd@positionCreate');
    Route::post('/position', 'HRDepartment\JobAdd@storePos')->name('position.storePos');
    Route::resource('/salesPer', 'HRDepartment\SalesPersonController');
});
Route::group(['middleware' => 'Marketing','as'=>'Marketing.'], function () {
    Route::resource('/mktEvent', 'MKTDepartment\UpcomingEventAdd');
    Route::get('/Mktdash', 'MKTDepartment\UpcomingEventAdd@mktdash');
    Route::get('/eventType', 'MKTDepartment\UpcomingEventAdd@eventView');
    Route::get('eventType/create', 'MKTDepartment\UpcomingEventAdd@createEventType');

    Route::post('/eventType', 'MKTDepartment\UpcomingEventAdd@eventStore')->name('eventType.eventStore');
    Route::get('/memberData', 'MKTDepartment\MemberController@showData');
    Route::get('/addLabel/create','MKTDepartment\MemberController@labelCreate');
    Route::get('/labelView', 'MKTDepartment\MemberController@labelView');
    Route::post('/labelView','MKTDepartment\MemberController@labelStore')->name('labelView.labelStore');
    Route::get('/yourBrandData', 'MKTDepartment\DropdownController@ViewYourBrand');
});
//interLink Selection
Route::get('dropdownlist', 'DropdownController@index');
Route::get('get-state-list', 'DropdownController@getStateList');
Route::get('get-city-list', 'DropdownController@getCityList');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
