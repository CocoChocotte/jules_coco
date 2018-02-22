@extends('layout.layouts')
@section('titre')
Ma liste d'ingredients
@stop

@section('contenu')


@foreach ($ingredient as $ingredient)
<div class="col-lg-3 col-xs-6">
	<div class="small-box bg-red">
		<div class="inner">
			<h4>{{$ingredient->nom}}</h5>
			</div>
			
		</div>
	</div>
	@endforeach 


	@stop