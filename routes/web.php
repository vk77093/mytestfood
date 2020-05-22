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
    $title_page='HOME-PAGE';
    return view('homePage',compact('title_page'));
});
Route::get('/test', function () {
    return view('homePageSecond');
});
Route::get('/about', 'WebController@about');
Route::get('/ourproduct', 'WebController@product');
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
Route::resource('/career', 'HRDepartment\JobForm');
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
Route::group(['middleware' => 'Marketing','as'=>'Marketing.','namespace'=> 'MKTDepartment'], function () {
    Route::resource('/mktEvent', 'UpcomingEventAdd');
    Route::get('/Mktdash', 'UpcomingEventAdd@mktdash');
    Route::get('/eventType', 'UpcomingEventAdd@eventView');
    Route::get('eventType/create', 'UpcomingEventAdd@createEventType');

    Route::post('/eventType', 'UpcomingEventAdd@eventStore')->name('eventType.eventStore');
    Route::get('/memberData', 'MemberController@showData');
    Route::get('/addLabel/create','MemberController@labelCreate');
    Route::get('/labelView', 'MemberController@labelView');
    Route::post('/labelView','MemberController@labelStore')->name('labelView.labelStore');
    Route::get('/yourBrandData', 'DropdownController@ViewYourBrand');
});
//interLink Selection
Route::get('dropdownlist', 'DropdownController@index');
Route::get('get-state-list', 'DropdownController@getStateList');
Route::get('get-city-list', 'DropdownController@getCityList');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//All the Product Description
Route::group(['namespace' => 'Product'], function () {
    Route::get('mayoFirst', 'Mayo@mayo');
});


