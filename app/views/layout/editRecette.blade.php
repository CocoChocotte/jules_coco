@extends('layout.layouts')
@section('titre')
Modifier Employe
@stop


@section('contenu')

  <br>
  <form method="post" class="w3-container w3-card-4">
    <h2 class="w3-text-dark-grey">Modifier Recette</h2>
    <p>      
      <label class="w3-text-dark-grey"><b>Titre</b></label>
      <input class="w3-input w3-border" name="titre" type="text" value="{{$recette->titre}}">
    </p>
    <p>      
      <label class="w3-text-dark-grey"><b>Categorie</b></label>
      <input class="w3-input w3-border" name="categorie" type="text" value="{{$recette->categorie}}">
    </p>
    <p>
      <label class="w3-text-dark-grey"><b>Description</b></label>
      <input class="w3-input w3-border" name="description" type="text" value="{{$recette->description}}">
    </p>

    <p>      
      <button type="submit" class="w3-btn w3-dark-grey">Modifier</button>
    </p>
  </form>


@stop