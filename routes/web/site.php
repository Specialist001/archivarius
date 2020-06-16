<?php

Route::group([
    'domain' => config('app.domain'),
//    'namespace' => 'Site',
//    'as' => 'site.'
], function () {
    // Route::fallback('ErrorController@notFound')->name('404');

    Route::get('/', function () {
        return view('welcome');
    });
    
    // Route::get('/home', 'HomeController@index')->name('home');

    Auth::routes();
});
