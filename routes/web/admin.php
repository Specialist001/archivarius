<?php

// Check role in route middleware
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => ['auth', 'roles'],
    'roles' => 'suadmin'
    ], function () {
        
//        Route::group([
//            'namespace' => 'Auth',
//            'as' => 'auth.'
//        ], function () {
//            Route::get('login', 'LoginController@showLoginForm')->name('loginForm');
//            Route::post('login', 'LoginController@login')->name('login');
//            Route::get('logout', 'LoginController@logout')->name('logout');
//        });
    Route::get('/', ['uses' => 'AdminController@index']);
       
    Route::get('admin', 'AdminController@index');
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('users', 'UsersController');
    Route::resource('pages', 'PagesController');
    Route::resource('activitylogs', 'ActivityLogsController')->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('settings', 'SettingsController');
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

});

