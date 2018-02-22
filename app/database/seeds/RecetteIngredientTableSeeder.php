<?php

class RecetteIngredientTableSeeder extends Seeder {

    public function run()
    {
        
        DB::table('recettes_ingredients')->insert(
            array(
                array(
                    'ingredient_id' => "13",
                    'recette_id' => "1",
                    'dose' => "1 cuillere a cafe",
                ),
 
                array(
                    'ingredient_id' => "15",
                    'recette_id' => "1",
                    'dose' => "250 mL",
                ),
                 array(
                    'ingredient_id' => "3",
                    'recette_id' => "2",
                    'dose' => "1 oeuf",
                ),
                  array(
                    'ingredient_id' => "9",
                    'recette_id' => "2",
                    'dose' => "une cuillere a soupe",
                ),
            )
        );


    }

}
