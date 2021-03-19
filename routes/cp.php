<?php

Route::prefix('fast-seo')->name('statamic-fast-seo.')->group(function() {
    Route::get('/dashboard', 'SettingsController@dashboard')->name('dashboard');
    Route::get('/settings', 'SettingsController@index')->name('settings.index');
    Route::post('/settings', 'SettingsController@update')->name('settings.update');
});
