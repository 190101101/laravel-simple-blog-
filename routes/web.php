<?php

Route::namespace('admin')->group(function(){
    Route::middleware('admin')->group(function(){

        Route::prefix('admin/panel')->group(function(){
            Route::get('/', 'PanelController@index');
        });
        
        Route::prefix('admin/setting')->group(function(){
            Route::get('/', 'SettingController@index');
            Route::get('/update/{id}', 'SettingController@update');
            Route::post('/edit/{id}', 'SettingController@edit');
            Route::get('/delete/{id}', 'SettingController@delete');
        });

        Route::prefix('admin/contact')->group(function(){
            Route::get('/', 'ContactController@index');
            Route::get('/show/{id}', 'ContactController@show');
        });

        Route::prefix('admin')->group(function(){
            Route::resource('blog', 'BlogController');
        });

        Route::prefix('admin')->group(function(){
            Route::resource('page', 'PageController');
        });

        Route::prefix('admin')->group(function(){
            Route::resource('user', 'UserController');
        });
    });
});

/**/
Route::namespace('main')->group(function(){
    Route::get('/', 'HomeController@index');

    Route::middleware('auth')->group(function(){
        Route::get('/login', 'HomeController@login');
        Route::post('/login', 'HomeController@signin');
    });

    Route::middleware('authless')->group(function(){
        Route::get('/logout', 'HomeController@logout');
    });

    Route::get('/blog/{slug}', 'BlogController@blog');
    Route::get('/blogs', 'BlogController@blogs');

    Route::get('/page/{slug}', 'PageController@page');
    Route::get('/pages', 'PageController@pages');

    Route::get('/contact', 'ContactController@contact');
    Route::post('/contact', 'ContactController@send');
});

