<?php	
	class CitiesController extends BaseController {
	
		static function selectCities(){
			$cities = DB::table('get')->cities();//se buscan lugares de un tipo.
			
			return $cities;
			//return View::make('selectTest', array('libros'=>$libros));
		}

		static function selectCitiesofRegion( $id ){
			$cities = DB::table('cities')->join('regions', 'cities.region',"=" ,'regions.id')->where("cities.region", "=", $id)->get();//busca municipios de una region.
			
			return $cities;
			//return View::make('selectTest', array('libros'=>$libros));
		}

	}
?>