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
    return Redirect::to('/home');
});
Route::get('/test', 'HomeController@index');

Route::get('/about', function () {
    return 'helo';
});

Auth::routes();
Route::post('/run-script', 'WorkOrdersController@runScript');
Route::get('/home', 'WorkOrdersController@index')->name('workorders.index');
Route::get('get-workorder-data', 'WorkOrdersController@workorderData');
