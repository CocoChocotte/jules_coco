<?php

	class RecettesIngredients extends Eloquent{

		protected $table = "recettes_ingredients";
		
		protected function getDateFormat()
		{
			return 'U';
		}
	}



