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
    return view('welcome');
});

Route::get('/courtratings/ratecourt/{court}','courtratingController@ratecourt')->name('courtratings.ratecourt');
Route::get('/customers/new', 'CustomerController@new');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update', 'CustomerController@update');
Route::post('/customers/create', 'CustomerController@create')->name('customers.create');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home','memberController@index')->name('home');
Route::get('/loggedInMember','memberController@getLoggedInMemberDetails');
Auth::routes();

Route::resource('members', 'memberController');

Route::resource('courts', 'courtController');

Route::resource('bookings', 'bookingController');

Route::get('calendar','calendarController@display')->name('calendar.display');
Route::get('/calendar/json','CalendarController@json')->name('calendar.json');

Route::resource('courtratings', 'courtratingController');