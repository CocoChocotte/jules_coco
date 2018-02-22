@extends('layout.rechercheRecette')
@section('titre')
Recherche d'une recette
@stop


@section('contenu')

<br>
<form method="post" class="w3-container w3-card-4">
  <br>
  <p>      
    <label class="w3-text-dark-grey"><b>Recherche</b></label>
    <input class="w3-input w3-border" name="recherche" type="text" placeholder=" Ex : Gateau"></p>
    <p>      

      <p>      
        <button type="submit" class="w3-btn w3-dark-grey">Rechercher <i class="fa fa-search"></i></button></p>

      </form>





      <div class="w3-container">
        <table class="w3-table w3-striped w3-hoverable">
          <tr class="w3-red">
            <th>Nom recettte</th>
            <th>Categorie</th>
            <th>Description</th>
          </tr>
          @foreach ($recettes as $recette)
          <tr>
            <td>{{$recette->titre}}</td>
            <td>{{$recette->categorie}}</td>
            <td>{{$recette->description}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>


    @stop