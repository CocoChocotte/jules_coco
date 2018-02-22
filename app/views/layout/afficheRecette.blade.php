@extends('layout.layouts')
@section('titre')
  Ma liste de Recettes  
@stop

@section('contenu')

    
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
      <td><a href="{{ route('editRecette', $recette->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</a>
        <a href="{{ route('deleteRecette', $recette->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Supprimer</a>
        <a href="{{ route('recette', $recette->id) }}" class="btn btn-block btn-info btn-xs"><i class="fa "></i> Afficher</a>
        
      </td>
    </tr>
	@endforeach
  </table>
</div>
</div>

@stop