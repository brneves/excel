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

Route::get('/diploma', 'DiplomaController@index')->name('diploma');
Route::post('/diploma', 'DiplomaController@store')->name('diploma.store');

Route::get('/user-questionario', 'UserQuestionarioController@index')->name('user-questionario');
Route::post('user-questionario', 'UserQuestionarioController@store')->name('user-questionario.store');

Route::get('/cfo-masc', 'CFOMascController@index')->name('cfo-masc');
Route::post('/cfo-masc', 'CFOMascController@store')->name('cfo-masc.store');

Route::get('/cfo-femi', 'CFOFemController@index')->name('cfo-femi');
Route::post('/cfo-femi', 'CFOFemController@store')->name('cfo-femi.store');

Route::get('/musica', 'MusicaController@index')->name('musica');
Route::post('/musica', 'MusicaController@store')->name('musica.store');

Route::get('/setores', 'SetorController@index')->name('setores');
Route::post('/setores', 'SetorController@store')->name('setores.store');

Route::get('/distribuicao', 'DistribuicaoController@index')->name('distribuicao');
Route::get('distribuicao-up', 'DistribuicaoController@up')->name('distribuicao-up');
Route::post('distribuicao-up', 'DistribuicaoController@store')->name('distribuicao-up.store');
Route::get('distribuicao-eventos', 'DistribuicaoController@distribuicaoEventos')->name('distribuicao-eventos');

Auth::routes();
