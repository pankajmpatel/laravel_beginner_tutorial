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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about','DemoController@about');
Route::get('/service','ServiceController@index');

Route::post('/service','ServiceController@store');

//Route::view('/about', 'about');


/* for Data From Route
Route::get('/newPage', function(){
$variable='Hey! Data from Route';

return view('newPage', compact('variable'));
} */
