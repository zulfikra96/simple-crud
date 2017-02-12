<?php
 use Illuminate\Http\Request;
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

Auth::routes();



Route::group(['middleware' => 'api'], function(){
    Route::get('cars', function(){
        return App\Car::latest()->orderBy('created_at','desc')->get();
    });

    Route::post('cars/store', 'HomeController@cars');
    Route::post('cars/delete/{id}', 'HomeController@deleteCars');
});
