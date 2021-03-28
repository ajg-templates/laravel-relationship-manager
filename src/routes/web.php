<?php


Route::middleware(['web'])->group(function () {
    Route::get('/relationships', 'Cyrex\RelationManager\app\Http\Controllers\RelationshipsController@index');
});