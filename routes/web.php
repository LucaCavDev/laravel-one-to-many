<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// EMPLOYEE
Route::get('/emps', 'MainController@empIndex')
    -> name('emp-index');
Route::get('/emp/{id}', 'MainController@empShow')
    -> name('emp-show');
//----------------------------


// TASK
Route::get('/tasks', 'MainController@taskIndex')
    -> name('task-index');


Route::get('/task/create', 'MainController@taskCreate')
    -> name('task-create');
Route::post('/task/store', 'MainController@taskStore')
    -> name('task-store');

Route::get('/task/edit/{id}', 'MainController@taskEdit')
    -> name('task-edit');
Route::post('/task/update/{id}', 'MainController@taskUpdate')
    -> name('task-update');

Route::get('/task/{id}', 'MainController@taskShow')
    -> name('task-show');



//---------------------------------------


// LOCATION
Route::get('/locs', 'MainController@locIndex')
    -> name('loc-index');

Route::get('/loc/{id}', 'MainController@locShow')
    -> name('loc-show');
//----------


// TYPOLOGY
Route::get('/typs', 'MainController@typIndex')
    -> name('typ-index');

Route::get('/typ/{id}', 'MainController@typShow')
    -> name('typ-show');





/*

// mostra tutti gli elementi
Route::get('/', 'PeripController@index')
    -> name('perips-index');
// mostra i dettagli di UN elemento
Route::get('/show/{id}', 'PeripController@show')
    -> name('perip-show');
// salvare una nuova entita'
Route::get('/create', 'PeripController@create')
    -> name('perip-create');
Route::post('/store', 'PeripController@store')
    -> name('perip-store');
// aggiornare UNA nuova entita'
Route::get('/edit/{id}', 'PeripController@edit')
    -> name('perip-edit');
Route::post('/update/{id}', 'PeripController@update')
    -> name('perip-update');
// eliminare UN'entita'
Route::get('/delete/{id}', 'PeripController@delete')
    -> name('perip-delete');

*/