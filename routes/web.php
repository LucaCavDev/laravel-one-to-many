<?php

use Illuminate\Support\Facades\Route;

// mostra tutti gli elementi
Route::get('/emps', 'MainController@empIndex')
    -> name('emp-index');

Route::get('/emp/{id}', 'MainController@empShow')
    -> name('emp-show');






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