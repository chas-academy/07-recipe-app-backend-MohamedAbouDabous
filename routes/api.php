<?php

// Route::middleware('jwt.auth')->get('users', function(Request $request) {
//     return auth()->user();
// });

Route::group([
    'middleware' => 'api',

], function ($router) {
    Route::post('login', 'HomeAuthController@login');
    Route::post('register', 'HomeAuthController@register');
    Route::post('logout', 'HomeAuthController@logout');
    Route::post('user', 'HomeAuthController@user');

    Route::post('delete-recipe', 'RecipeController@destroy');
    Route::get('recipe', 'RecipeController@getSavedRecipes');
    Route::post('save-recipe', 'RecipeController@store');

});