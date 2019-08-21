<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Show it all
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Recipe::take(20)->get();
    }
    /**
     * Showing the form
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /**
     * Store the created
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->user_id = '1';
        $recipe->edamam_id = $request->input('id');
        $recipe->json_data = json_encode($request->all());
        $recipe->save();
        return ([]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Recipe::where('id', $id)->first();
    }
    /**
     * Here you'll delete it!
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Recipe::where('id', $id)->delete();
    }
}