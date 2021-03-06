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

Route::get('/', function () {
    return view('landinghome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route For Admin Role
Route::group(['middleware' => 'CheckRole:admin'], function () {
    Route::get('/dashboardadmin', 'AdminController@dashboard')->name('dashboard');
    Route::get('/viewgoods', 'AdminController@viewgoods')->name('viewgoods');

    // CRUD
    Route::get('/getgoods', 'AdminController@databarang');
    Route::post('/addgoods', 'AdminController@adddata');
    Route::post('/getid', 'AdminController@getIdBarang');
    Route::post('/editgoods', 'AdminController@editgoods');
    Route::post('/deletegoods', 'AdminController@deletegoods');

    // PRINT & GENERATE
    Route::get('/pdf', 'AdminController@printpdf')->name('printpdf');
});




// Route For User Role
Route::group(['middleware' => 'CheckRole:user'], function () {
    Route::get('/userhome', 'UserController@userhome')->name('userhome');
});
