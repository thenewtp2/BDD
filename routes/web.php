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



Route::get('acceiull', function () {
    return view('acceiull');
});

Route::get('inscrire', function () {
    return view('inscrire');
});

Route::get('login', function () {
    return view('login');
});
Route::get('Carte épidémiologique', function () {
    return view('Carte épidémiologique');
});


Route::get('pub1', function () {
    return view('pub1');
});

Route::get('je dénonce', function () {
    return view('je dénonce');
});


Route::get('idés/idee', 'IdéController@idee');
Route::get('publications/create', 'PublicationController@create');
Route::post('publications', 'PublicationController@store');

Route::get('publications', 'PublicationController@index');

Route::delete('publications/{id}', 'PublicationController@destroy');
Route::get('publications/{id}/edit', 'PublicationController@edit');
Route::get('publications/{id}/show', 'PublicationController@show');
Route::put('publications/{id}', 'PublicationController@update');

Route::get('citoyens', 'CitoyenController@index');
Route::get('chifres', 'ChifreController@index');
Route::get('chifres/create', 'ChifreController@create');
Route::post('chifres', 'ChifreController@store');

Route::get('chifres/{id}/edit', 'ChifreController@edit');
Route::put('chifres/{id}', 'ChifreController@update');
Route::delete('chifres/{id}', 'ChifreController@destroy');



Route::get('idés', 'IdéController@index');
Route::delete('idés/{id}', 'IdéController@destroy');

Route::get('signals', 'SignalController@index');
Route::delete('signals/{id}', 'SignalController@destroy');
Route::get('signals/denonce', 'SignalController@denonce');
Route::post('signals', 'SignalController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
