<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        $this->call('RecetteTableSeeder');
        $this->call('IngredientTableSeeder');
        $this->call('RecetteIngredientTableSeeder');
	}

}
