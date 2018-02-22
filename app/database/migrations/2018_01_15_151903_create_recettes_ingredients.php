<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecettesIngredients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recettes_ingredients', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');;

            $table->integer('recette_id')->unsigned()->index();
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade');

            $table->string('dose', 100);

            //$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 * 
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recettes_ingredients');
	}

}
