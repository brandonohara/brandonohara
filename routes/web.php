<?php

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::post('/contact', 'ContactController@store')
        ->name('contact.store')
        ->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class);;
