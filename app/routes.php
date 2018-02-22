<?php


Route::get('/',function(){
    return View::make('layout.home');
});

Route::get('/home',function(){
    return View::make('layout.home');
});



Route::get('/addRecette',function(){
    return View::make('layout.addRecette');
});

Route::post('/addRecette',function(){
    $titre = Input::get('titre');
    $categorie = Input::get('categorie');
    $description = Input::get('description');
    $ing1 = Input::get('ingredient1');
    $ing2 = Input::get('ingredient2');
    $ing3 = Input::get('ingredient3');
        //$photo = Input::get('photo');
    $recette = new Recette();
    $recette->titre = $titre;
    $recette->categorie = $categorie;
    $recette->description = $description;
    $recette->image = "test";
    $recette->save();


    $ing = Ingredient::find($ing1);
    if($ing != $ing1){
        if(strlen($ing1)>0){
            $ingredient1 = new Ingredient();
            $ingredient1->nom = $ing1;
            $ingredient1->save();
            $recetteIngredient1 = new recettesIngredients();
            $recetteIngredient1->recette_id = $recette->id;
            $recetteIngredient1->ingredient_id = $ingredient1->id;
            $recetteIngredient1->save();
        }
    }
    $ing = Ingredient::find($ing2);
    if($ing != $ing1){
        if(strlen($ing2)>0){
            $ingredient2 = new Ingredient();
            $ingredient2->nom = $ing2;
            $ingredient2->save();
            $recetteIngredient2 = new recettesIngredients();
            $recetteIngredient2->recette_id = $recette->id;
            $recetteIngredient2->ingredient_id = $ingredient2->id;
            $recetteIngredient2->save();
        }
    }
    $ing = Ingredient::find($ing3);
    if($ing != $ing1){
        if(strlen($ing1)>0){
            $ingredient3 = new Ingredient();
            $ingredient3->nom = $ing3;
            $ingredient3->save();
            $recetteIngredient3 = new recettesIngredients();
            $recetteIngredient3->recette_id = $recette->id;
            $recetteIngredient3->ingredient_id = $ingredient3->id;
            $recetteIngredient3->save();
        }
    }


    return Redirect::to('addRecette');
    
});

Route::get('/afficheRecette', array( 'as' => 'afficheRecette' , function(){
    $recettes = Recette::all();
    $data['recettes']=$recettes;
    $data = compact('recettes');
    return View::make('layout.afficheRecette',$data);
}));

Route::post('/editRecette/{id}', array( 'as' => 'editRecette', function($id){

    $recette = Recette::find($id);
    $titre = Input::get('titre');
    $categorie = Input::get('categorie');
    $description = Input::get('description');
    $recette->titre = $titre;
    $recette->categorie = $categorie;
    $recette->description = $description;
    $recette->save();

    return Redirect::to('afficheRecette');
}));


Route::get('/editRecette/{id}', array( 'as' => 'editRecette', function($id){
    $data['recette'] = Recette::find($id);
    return View::make('layout.editRecette', $data);
}));



Route::get('/recette/{id}', array( 'as' => 'recette', function($id){
    $data = array();
    $data['recette'] = Recette::find($id);
    //$data['ingredient'] = table('recettes_ingredients')->where('$recette_id', '=', '%'.$id)
    return View::make('layout.recette', $data);
}));





Route::get('/rechercheRecette', array( 'as' => 'rechercheRecette', function(){
    $data['recettes'] = null;
    return View::make('layout.rechercheRecette',$data);
}));


Route::post('/rechercheRecette', array( 'as' => 'rechercheRecette', function(){

    $retour = array();
    $recherche = Input::get('recherche');

    $resultatRecette=array();
    $resultatRecette = Recette::where('titre', 'like', '%'.$recherche.'%')->get();

    $ingredientNames = array();
    $ingredientNames = DB::table('ingredients')->where('nom', 'like', '%'.$recherche.'%')->get();

    // return var_dump(empty($ingredientNames));

    $recetteFromIngredients = array();

    if (!empty($ingredientNames)) {
        $recettesIdFromPivot = array();
        foreach ($ingredientNames as $ingredientId) {
            // $recetteIdFromPivot = RecettesIngredients::where('ingredient_id', '=', $ingredientId->id);
            $recetteIdFromPivot = DB::table('recettes_ingredients')->where('ingredient_id', '=', $ingredientId->id)->first();
             //return var_dump($recetteIdFromPivot);
            if (!empty($recetteIdFromPivot)) {
                array_push($recettesIdFromPivot, $recetteIdFromPivot);
            }
        }  

        foreach ($recettesIdFromPivot as $recetteId) {
            $idRecette = $recetteId->id;
        // return var_dump($idRecette);
            $recette = Recette::find($idRecette);
            array_push($recetteFromIngredients, $recette);
        }

    }

    $resultatCategorie=array();
    $resultatCategorie = Recette::where('categorie', 'like', '%'.$recherche.'%')->get();

    $retour['recette']=$resultatRecette;
    $retour['ingredient']=$recetteFromIngredients;
    $retour['categorie']=$resultatCategorie;


    $data['retour']=$retour;

    return View::make('layout.rechercheRecette', $data);
}));


Route::get(('/recette/delete/{id}'),array('as' => 'deleteRecette', function($id) {
    $recette = Recette::find($id);
    $recette->delete();
    return Redirect::route('afficheRecette');
    
}));



Route::get('/listeIngredient', array( 'as' => 'listeIngredient' , function(){
    $ingredient = Ingredient::all();
    $data['ingredient']=$ingredient;
    return View::make('layout.listeIngredient',$data);
}));
