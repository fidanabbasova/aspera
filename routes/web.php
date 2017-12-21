<?php

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/home', function () {
    return view('layouts.home');
});

Route::get('/services', 'PageController@getServices');

Route::get('/psychologists', function () {
    return view('layouts.psychologists');
});

Route::get('/articles', function () {
    return view('layouts.articles');
});

Route::get('/questions', function () {
    return view('layouts.questions');
});

Route::get('/news', function () {
    return view('layouts.news');
});

Route::get('/address', function () {
    return view('layouts.address');
});

Auth::routes();

//Route::get('login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/profile', 'HomeController@index')->name('profile');

Route::prefix('admin')->group( function () {

    Route::get('/', 'AdminController@index')->name('admin-dashboard');

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

