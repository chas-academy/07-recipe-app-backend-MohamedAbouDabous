<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('user_id');
            $table->string('edamam_id', 32);
            $table->json('json_data');
            $table->timestamps();
            $table->unique(['user_id', 'edamam_id']);
            // dd($table);
        });
    }

    // dd($table);

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_tables');
    }
}
