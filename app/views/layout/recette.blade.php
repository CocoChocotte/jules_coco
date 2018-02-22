@extends('layout.layouts')
@section('titre')

@stop


@section('contenu')
@parent
<h1>
 {{$recette->titre}}
</h1>


<section class="content">

  <!-- Default box -->
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Catégorie: {{$recette->categorie}}</h3>


    </div>
    <div class="box-body">
      
      <br>
      <div class="row">
        <div class="col-xs-12 text-center">
          <img src=".././rouge.jpg" class="w3-border w3-padding" style="width:100%;max-width:500px">
          
        </div>
      </div>
      <div class="ajax-content">
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <p>Description: <br>{{$recette->description}}</p>
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

  
  <a href="{{url('afficheRecette')}}"><button type="button" class="btn btn-block btn-info"><i class="fa fa-arrow-left"></i> Retour</a></button>
</div>

</section>


<br><br>




<br><br><br><br>




@stop