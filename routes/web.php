<?php

use Illuminate\Support\Facades\Route;
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
/*Testing Area */
    Route::get('test','ProfileController@test');
/*End Testing Area */

/*  Viewer Index  */
    Route::get('/', 'ViewController@index')->name('index');

/*  User Index    */
    Route::get('/home', 'HomeController@index')->name('home');

/*  Admin Index   */
    Route::get('dashbord', 'HomeController@adminHome')->name('admin.dashbord')->middleware('is_admin');


//User Profile Manage
Route::get('profiles', 'ProfileController@profiles');
Route::post('profiles', 'ProfileController@update_avatar');
Route::post('profiles1', 'ProfileController@update_avatar_admin');

//Submited User Property Details
Route::get('userpro', 'SubmitProperty@index')->name('user-properties');
Route::post('prostore', 'SubmitProperty@pstore');
Route::get('userdelete/{id}', 'SubmitProperty@delete');
Route::get('/search','SubmitProperty@search');

//User Add Property
Route::get('buyproperty','SubmitProperty@show1');/*All User Show Property buyProperty*/
Route::get('rentproperty','SubmitProperty@showrent');/*All User Show Property buyProperty*/

//delete User Property
Route::get('/SubmitProdelete/{id}', 'SubmitProperty@destroy');

//Admin Delete Routes
Route::get('/AdminProdelete/{id}', 'SubmitProperty@destroyadmin');
Route::get('/AdminUserdelete/{id}', 'ProfileController@destroyadmin');
Route::get('/AdminCondelete/{id}', 'SubmitProperty@destroyadmin');
Route::get('/AdminComdelete/{id}', 'UserComments@destroyadmin');
Route::get('/AdminServicedelete/{id}', 'ServiceController@destroyadmin');

//Add Services
Route::POST('addservice','ServiceController@addservice');

//
Route::get('/SubmitProedit/{id}', 'SubmitProperty@showdata');
Route::post('/SubmitProuserlike','WatchListController@like');
Route::get('SubmitProshow/{id}', 'SubmitProperty@show');


Route::get('addDetails', 'SubmitProperty@addDetails');
Route::post('update{id}','SubmitProperty@update1');
Auth::routes();


//Admin Pages Routes
Route::get('admincontact', 'ContactController@index')->name('admin.admincontact')->middleware('is_admin');
Route::get('adminuserpro', 'SubmitProperty@showadmin')->name('admin.adminuserpro')->middleware('is_admin');
Route::get('adminservice', 'ServiceController@index')->name('admin.adminservice')->middleware('is_admin');
Route::get('adminservice', 'ServiceController@index')->name('admin.adminservice')->middleware('is_admin');
Route::view('adminprofile','admin.adminprofile');

Route::post('upservice{id}','ServiceController@updateservice');
Route::get('/adminserviceupdate/{id}','ServiceController@ShowService');
Route::get('updateProfile1', 'ProfileController@updateProfile');
Route::get('admincomment', 'UserComments@show')->name('admin.admincomment')->middleware('is_admin');

// Add Comment in Property
Route::post('/sendDetails','UserComments@addDetails');

//User Add Any property in WatchList
Route::get('/likedelete/{id}', 'WatchListController@watchremove');
Route::get('watchlist','WatchListController@watchlist');

//Basic Routes
Route::get('services', function () {
    return view('Services');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('submit-property', function () {
    return view('submit-property');
});
Route::get('service','ServiceController@servicehome');
Route::view('forget','newForget');

//Route::get('/contact', 'ContactController@store')->name('contact');
Route::post('destroy','ContactController@destroy');
Route::post('submit','ContactController@store');

//Admin Logout Route
Route::get('/logout','ViewController@logout');

//Forgot Password For User
Route::post('forgotpass','ForgotPassController@forgotpassword');
Route::post('forgotup','ForgotPassController@forgotupdate');
