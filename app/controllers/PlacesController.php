<?php	
	class PlacesController extends BaseController {
	
		static function insertPlace(){
			$place = new Places;
			$place->name = Input::get("name");
			$place->des = Input::get("des");
			$place->type = Input::get("type");
			$place->city = Input::get("city");
			$place->address = Input::get("address");
			$place->lat = Input::get("lat");
			$place->lon = Input::get("lon");
			$place->cost_min = Input::get("cost_min");
			$place->cost_max = Input::get("cost_max");
			$place->temp = Input::get("temp");
			$place->open_date = Input::get("open_date");
			$place->end_date = Input::get("close_date");
			$place->opening = Input::get("opening");
			$place->closing = Input::get("closing");
			$place->image = Input::get("image");
			$place->save();
			
			//Los View::make's estan porque asi estaban en tu ejemplo, rodolfo, no se si sean necesarios.
	
			return View::make('insertPlace', array('place' => $place));
		}
	
		function selectPlacesOfType( $id ){
			$places = DB::table('places_types')->join('places', 'places_types.id',"=" ,'places.type')->where("places.type", "=", $id)->get();//se buscan lugares de un tipo.
			
			return "";
			//return View::make('selectTest', array('libros'=>$libros));
		}

		function selectPlacesOfCity( $id_city ){
			$city  = Cities::find($id_city);
			$places = DB::table('places')->where("places.city", "=", $id_city)->get();//se buscan lugares de una ciudad.
			$types2 = DB::table('places_types')->lists("name","id");
			$types = array_merge(array(0=>'Todas las categorías'),$types2);
			
			return View::make('places', array('places'=>$places, 'city'=>$city, 'types'=>$types));
		}

		function selectPlacesOfCityAndType( $id_type, $id_city ){
			if($id_type == 0) $places = DB::table('places')->where("places.city", "=", $id_city)->get();//se buscan lugares de una ciudad.
			else $places = DB::table('places')->where('places.type', "=" ,$id_type)->where("places.city", "=", $id_city)->get();//se buscan lugares de una ciudad.
			
			echo json_encode($places);

			return "";
			return View::make('table', array('places'=>$places));
		}

	}
?>