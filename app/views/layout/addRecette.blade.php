@extends('layout.layouts')
@section('titre')
Ajouter une recette
@stop


@section('contenu')
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Nouvelle Recette</h3>
  </div>
  <!-- form start -->
  <form method="post">
    <div class="box-body">
      <div class="form-group">
        <label>Nom de la recette</label>
        <input type="text" class="form-control"  name="titre" placeholder="Nom ...">
      </div>
      <div class="form-group">
        <label>Categorie</label>
        <textarea class="form-control" rows="3"  name="categorie" placeholder="Categorie"></textarea>
      </div>
      <div class="form-group">
        <label>Ingredients principaux : </label>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-4">
              <input class="form-control" name="ingredient1" placeholder="Ingredient 1">
            </div>
            <div class="col-xs-4">
              <input class="form-control"  name="ingredient2" placeholder="Ingredient 2">
            </div>
            <div class="col-xs-4">
              <input class="form-control" name="ingredient3" placeholder="Ingredient 3">
            </div>
          </div>
        </div>
    </div>

     <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3"  name="description" placeholder="Description"></textarea>
      </div>

    <div class="form-group">
      <label>Importer des photos</label>
      <br>
      <label for="exampleInputFile">Photo 1</label>
      <input type="file" name="photo" id="exampleInputFile">
    </div>
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" class="btn btn-danger">Valider</button>
  </div>
</form>
</div>


@stop