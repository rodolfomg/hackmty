<?php	
	class UsersController extends BaseController {
	
		static function insertUser(){
			$user = new Users;
			$user->username = Input::get("username");
			$user->pass = Input::get("pass");
			$user->type = Input::get("type");
			$user->name = /Input::get("name")
			$user->age = Input::get("age");
			$user->address = Input::get("address");
			$user->gender = Input::get("gender");
			$user->email = Input::get("email");
			$user->save();
			
			//Los View::make's estan porque asi estaban en tu ejemplo, rodolfo, no se si sean necesarios.
	
			return View::make('insertUser', array('user' => $user));
		}	
	}
?>