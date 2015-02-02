<?php

class UsersController extends BaseController {
        
        public function getLogin()
	{
	    return View::make('users.login');
	}
        
        public function postLogin()
	{
	    $input = Input::all();            
            $validator = Validator::make($input, User::$rules);
            
            if($validator->fails()) {
                return Redirect::to('/user/login')->withErrors($validator)->withInput()
                        ->with('message', 'Please, enter your Username and Password!');
            }
            else {
                $user = array(
                    'username'=>Input::get('username'),
                    'password'=>Input::get('password'),
                );
                
                if(Auth::attempt($user)){ 
                    return Redirect::to('/books')->with('message', 'You are Login');
                } else {
                    return Redirect::to('/user/login')->withErrors($validator)->withInput()
                            ->with('message', 'Invalid Username or Password!');
                }
           }
	}
        /*
        public function logout() {
            $message = 'You are logout!';
            if(Auth::check()){
                Auth::logout();
                return Redirect::to('/books/create')->with('message', $message);
            } else {
                return Redirect::to('/user/login')->with('message', $message);
            }
        }*/

}
