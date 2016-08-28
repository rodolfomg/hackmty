<?php	
	class CitiesController extends BaseController {
	
		function selectCities(){
			$cities = Cities::all();//se buscan lugares de un tipo.
			$regions = DB::table('regions')->lists('name', 'id');

			return View::make('cities', array('cities'=>$cities, 'regions'=>$regions));
		}

		function selectCitiesofRegion( $id ){
			$region = Region::find($id);

			$cities = DB::table('cities')->where("cities.region", "=", $id)->get();//busca municipios de una region.
			
			return View::make('citiesRegion', array('cities'=>$cities, 'region'=>$region->name));
		}

	}
?>