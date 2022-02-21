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

Route::resource('importar', 'ImportsController');
Route::post('import', 'ImportsController@importUsers')->name('importar');


Route::get('seed', 'SeederController@index')->name('seed');
Route::post('seed', 'SeederController@seed')->name('seed.post');
//Route::post('seed', 'SeederController@seed')->name('seed');

Route::get('pagamento');

Route::get('/template', function () {
    return view('site.layouts.templateBasico');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diploma', 'DiplomaController@hash')->name('diploma.hash');

Auth::routes();
