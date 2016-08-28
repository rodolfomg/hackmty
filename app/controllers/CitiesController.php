<?php	
	class CitiesController extends BaseController {
	
		function selectCities(){
			$cities = Cities::all();//se buscan lugares de un tipo.
			$regions = DB::table('regions')->lists('name', 'id');

			return View::make('cities', array('cities'=>$cities, 'regions'=>$regions));
		}

		function selectCitiesofRegion( $id ){
			$cities = DB::table('cities')->join('regions', 'cities.region',"=" ,'regions.id')->where("cities.region", "=", $id)->get();//busca municipios de una region.
			
			return $cities;
			//return View::make('selectTest', array('libros'=>$libros));
		}

	}
?>