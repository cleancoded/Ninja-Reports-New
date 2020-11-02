<?php

Route::get('/', function () {
    return view('dashboard/home');
});

Route::group([], function () {
    Route::get('/home', 'DashboardController@home');
    Route::get('/seo_audit', 'DashboardController@seo_audit')->name('seo_audit');
    Route::get('/audit', 'DashboardController@audit');
    Route::get('/analysis', 'DashboardController@seo_analysis')->name('analysis');
});

Route::post('/seo', 'analysisController@get_seo_result')->name('seo');
Route::post('/audit', 'analysisController@get_audit_result')->name('audit');

Route::get('login', 'LoginController@redirectToGoogle')->name('login');
Route::get('login/callback', 'LoginController@handleGoogleCallback');
Route::get('logout', 'LoginController@logout');
