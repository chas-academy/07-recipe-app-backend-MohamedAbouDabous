<?php
// use Illuminate\Http\Request;
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
],
function ($router) {
    Route::post('login', 'HomeAuthController@login');
    Route::post('logout', 'HomeAuthController@logout');
    Route::post('refresh', 'HomeAuthController@refresh');
    Route::post('home', 'HomeAuthController@home');
});
Route::resource('recipes', 'RecipeController');