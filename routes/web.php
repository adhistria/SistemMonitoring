<?php
use Illuminate\Support\Facades\DB;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'AliranController@index')->name('dashboard');
Route::get('/forecast', 'ForecastController@index')->name('forecast');
//Route::get('/store', function () {
//    return view('debitair.store');
//});
//Route::post('/post','AliranController@store');
//Route::get('/show/{id}','AliranController@show')->name('show');
//Route::get('/tes',function(){
//    return view('blank');
//});
//Route::get('createImage','ImageController@create')->name('createImage');
//Route::post('/postImage','ImageController@store');
//Route::get('/createForecast','ForecastController@create')->name('createForecast');
//Route::post('/storeForecast','ForecastController@store');
//Route::get('/delete',function (){
//    DB::table('alirans')->truncate();
//    DB::table('forecasts')->truncate();
//});