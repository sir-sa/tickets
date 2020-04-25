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
    return view('welcome');
});
// Route::get('/', function () {
// 	$name = request('name'
// 	return $name;
//     // return view('test');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('tickets','TicketController@index')->name('tickets.index');

// Route::get('/tickets/create','TicketController@create')->name('tickets.create');

// Route::get('/tickets/{ticket}','TicketController@show')->name('tickets.show');

// Route::post('/tickets/{ticket}','TicketController@update')->name('tickets.update');

// Route::get('/tickets/delete','TicketController@destroy')->name('tickets.delete');


Route::resource('tickets','TicketController');
