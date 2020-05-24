<?php

// Auth::routes(['register' => false, 'verify' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::post('/contact', 'ContactController@store')
        ->name('contact.store')
        ->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class);

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/tag/{tag}', 'ArticlesController@index')->name('articles.tag');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
