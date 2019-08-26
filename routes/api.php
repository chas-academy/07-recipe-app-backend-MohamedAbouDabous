<?php

Route::group([
    'middleware' => 'api',

], function ($router) {
    Route::post('login', 'HomeAuthController@login');
    Route::post('signup', 'HomeAuthController@signup');
    Route::post('logout', 'HomeAuthController@logout');
    Route::post('refresh', 'HomeAuthController@refresh');
    Route::post('me', 'HomeAuthController@me');

});