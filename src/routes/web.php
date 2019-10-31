<?php



Route::group(['namespace'=>'Fouzo09\Contact\Http\Controllers'], function (){
    Route::get('contact','ContactController@index');

    Route::post('contact','ContactController@send');
});

