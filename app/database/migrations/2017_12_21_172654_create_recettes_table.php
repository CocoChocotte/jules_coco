<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecettesTable extends Migration {

	public function up()
	{
		Schema::create('recettes', function($table) {
			$table->increments('id');
			$table->string('titre', 50);
			$table->string('categorie', 50);
			$table->text('description');
			$table->string('image', 200);

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
		Schema::drop('recettes');
	}

}
