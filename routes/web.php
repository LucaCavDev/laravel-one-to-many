<?php

use Illuminate\Support\Facades\Route;

// mostra tutti gli elementi employee
Route::get('/emps', 'MainController@empIndex')
    -> name('emp-index');
    // mostra i dettagli di UN employee
Route::get('/emp/{id}', 'MainController@empShow')
    -> name('emp-show');

// mostra tutti gli elementi tasks
Route::get('/tasks', 'MainController@taskIndex')
    -> name('task-index');
// mostra i dettagli di UN task
Route::get('/task/{id}', 'MainController@taskShow')
    -> name('task-show');

// mostra tutti gli elementi location
Route::get('/locs', 'MainController@locIndex')
    -> name('loc-index');
// mostra i dettagli di UNA location
Route::get('/loc/{id}', 'MainController@locShow')
    -> name('loc-show');


//----------
// mostra tutti gli elementi typology
Route::get('/typs', 'MainController@typIndex')
    -> name('typ-index');
// mostra i dettagli di UNA typology
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