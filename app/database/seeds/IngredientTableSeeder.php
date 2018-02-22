<?php

class IngredientTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ingredients')->insert(
            array(
                array(
                    'nom' => 'chocolat',
                   
                ),
                array(
                    'nom' => 'farine',
                    
                ),
                array(
                    'nom' => 'oeuf',
                    
                ),
                array(
                    'nom' => 'sucre',
                    
                ),
                array(
                    'nom' => 'lait',
                    
                ),
                array(
                    'nom' => 'sel',
                    
                ),
                array(
                    'nom' => 'poivre',
                    
                ),
                array(
                    'nom' => 'huile tournesol',
                    
                ),
                array(
                    'nom' => 'huile olives',
                    
                ),
                array(
                    'nom' => 'beurre',
                    
                ),
                array(
                    'nom' => 'levure',
                    
                ),
                array(
                    'nom' => 'fraise',
                    
                ),
                array(
                    'nom' => 'the',
                    
                ),
                array(
                    'nom' => 'cafe',
                    
                ),
                array(
                    'nom' => 'eau',
                    
                ),
                array(
                    'nom' => 'creme',
                    
                ),
                array(
                    'nom' => 'gruillere',
                    
                ),
                array(
                    'nom' => 'colorant',
                    
                ),
                
            )
        );


    }

}
