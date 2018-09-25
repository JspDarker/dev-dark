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

\\\\\\\\
//Route::get('demo','DemoController@index')->name('start');
//Route::get('test/{te?}/{hi}','DemoController@demo')->name('start1');
//
//Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
//    Route::get('dashboard', function() {} );
//});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'shop','middleware'=> 'web'],function() {
    Route::get('/','Front\PageController@page')->name('page');
    Route::get('/go','Front\ClientController@go')->name('go');
    Route::get('/up-file','Front\PageController@checkFile')->name('is_file');
});

