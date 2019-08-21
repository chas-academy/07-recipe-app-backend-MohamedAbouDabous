<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/recipes', function (Request $request) {
    $recipe = new Recipe();
    $recipe->user_id = '1';
    $recipe->edamam_id = time();
    $recipe->json_data = 'sending';
    $recipe->save();
    return ('Hello ma old friend');
});


Route::get('recipes', function (Request $request) {
    return Recipe::take(25)->get();
});