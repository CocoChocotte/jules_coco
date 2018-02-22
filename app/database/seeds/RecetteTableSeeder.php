<?php

class RecetteTableSeeder extends Seeder {

    public function run()
    {
        
        DB::table('recettes')->insert(
            array(
                array(
                    'titre' => 'The a la menthe',
                    'categorie' => 'boisson',
                    'description' => 'Dans un verre mettre de l eau chaude a 80 degres verser le the dedans, attendre 2min30',
                    'image' => 'img',
                ),
 
                array(
                    'titre' => 'Oeuf au plat',
                    'categorie' => 'recette rapide',
                    'description' => 'mettre de lhuile d olive dans une poele a frire, casser l oeuf dans la poele, attendre jusqu a ce que le blanc durcisse',
                    'image' => 'img',
                ),
                array(
                    'titre' => 'Gateau au Chocolat',
                    'categorie' => 'Gateau',
                    'description' => 'Un gateau avec du chocolat',
                    'image' => 'img',
                ),
                array(
                    'titre' => 'Decoration Cupcake',
                    'categorie' => 'Gateau',
                    'description' => 'Pour decorer de jolis cupcake',
                    'image' => 'img',
                ),
            )
        );


    }

}
