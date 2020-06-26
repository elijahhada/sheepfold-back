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

Route::get('/get-all-sheeps', 'SheepController@getAllSheeps');
Route::post('/add-new-sheep', 'SheepController@addNewSheep');
Route::post('/remove-sheep', 'SheepController@removeSheep');
Route::post('/transfer-sheep', 'SheepController@transferSheep');
Route::post('/save-time', 'InfoController@saveTime');
Route::get('/get-info', 'InfoController@getTimeAndInfo');