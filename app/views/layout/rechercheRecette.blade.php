@extends('layout.layouts')
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

      <br><br>

      <div class="w3-container">
        <table class="w3-table w3-striped w3-hoverable w3-third">
          <tr class="w3-red">
            <th>Recherche par nom</th>
          </tr>
          @if(isset($retour))
          @foreach ($retour['recette'] as $recette)
          <tr>
            <td>{{$recette->titre}}
              <a href="{{ route('recette', $recette->id) }}" class="btn btn-block btn-info btn-xs"><i class="fa "></i> Afficher</a></td>
            </tr>
            @endforeach
            @endif
          </table>

          <table class="w3-table w3-striped w3-hoverable w3-third">
            <tr class="w3-red">
              <th>Recherche par Ingredients</th>
            </tr>

            @if(isset($retour['ingredient']) && sizeof($retour['ingredient']) > 0)
            @foreach ($retour['ingredient'] as $recette)
            <tr>
              <td> {{ $recette['titre'] }}
                <a href="{{ route('recette', $recette['id']) }}" class="btn btn-block btn-info btn-xs"><i class="fa "></i> Afficher</a>
              </td>
            </tr>
            @endforeach
            @endif
          </table>

          <table class="w3-table w3-striped w3-hoverable w3-third">
            <tr class="w3-red">
              <th>Recherche par Categorie</th>
            </tr>
            @if(isset($retour))
            @foreach ($retour['categorie'] as $recette)
            <tr>
              <td>{{$recette->titre}}
                <a href="{{ route('recette', $recette->id) }}" class="btn btn-block btn-info btn-xs"><i class="fa "></i> Afficher</a>
              </td>
            </tr>
            @endforeach
            @endif
          </table>


          
        </div>
      </div>




      @stop