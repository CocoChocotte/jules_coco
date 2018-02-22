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
                  array(
                    'ingredient_id' => "2",
                    'recette_id' => "3",
                    'dose' => "250G",
                ),
                  array(
                    'ingredient_id' => "3",
                    'recette_id' => "3",
                    'dose' => "3oeuf",
                ),
                  array(
                    'ingredient_id' => "1",
                    'recette_id' => "3",
                    'dose' => "une tablette",
                ),
                  array(
                    'ingredient_id' => "4",
                    'recette_id' => "3",
                    'dose' => "100G",
                ),
                  array(
                    'ingredient_id' => "19",
                    'recette_id' => "4",
                    'dose' => "100G",
                ),
                  array(
                    'ingredient_id' => "20",
                    'recette_id' => "4",
                    'dose' => "1 dose de chaque couleur",
                ),
                  array(
                    'ingredient_id' => "21",
                    'recette_id' => "4",
                    'dose' => "au choix",
                ),
            )
        );


    }

}
