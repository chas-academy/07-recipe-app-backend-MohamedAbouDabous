<?php
// use Illuminate\Http\Request;
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
],
function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('home', 'AuthController@home');
});
Route::resource('recipes', 'RecipeController');