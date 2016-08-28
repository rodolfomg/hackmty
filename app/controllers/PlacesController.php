<?php	
	class PlacesController extends BaseController {
	
		static function insertPlace(){
			$place = new Places;
			$place->name = Input::get("name");
			$place->des = Input::get("des");
			$place->type = Input::get("type");
			$place->city = /Input::get("city")
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
	
		static function selectPlacesofType( $id ){
			$places = DB::table('places_types')->join('places', 'places_types.id',"=" ,'places.type')->where("places.type", "=", $id)->get();//se buscan lugares de un tipo.
			
			return $places;
			//return View::make('selectTest', array('libros'=>$libros));
		}

		static function selectPlacesofCity( $id ){
			$places = DB::table('places')->join('cities', 'places.city',"=" ,'cities.id')->where("places.city", "=", $id)->get();//se buscan lugares de una ciudad.
			
			return $places;
			//return View::make('selectTest', array('libros'=>$libros));
		}

	}
?>