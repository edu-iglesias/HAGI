<?php

class RegisterController extends BaseController {

	public function index()
	{
		return View::make('register');
	}

	public function store()
	{
		
		$rules = array(		
			'email'	=> 'required|email|max:100|unique:users,email', 
			'password' => 'Required|min:5|Confirmed|max:100',
        	'password_confirmation' => 'Required|min:5|max:100',
		);

		$validationResult = Validator::make($inputs, $rules);

		if ( $validationResult->passes() ) 
		{
			$user = New User;
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->org_name = Input::get('org_name');
			$user->save();

			return Redirect::to('merchant');

		}
		else
		{
			 return Redirect::back()->withInput()->withErrors($validationResult);
		}


	}

}
