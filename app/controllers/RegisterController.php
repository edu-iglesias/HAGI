<?php

class RegisterController extends BaseController {

	public function index()
	{
		return View::make('register');
	}

	public function store()
	{
		$inputs = Input::all();
		
		$rules = array(		
			'email'	=> 'required|email|max:100|unique:users,email', 
			'password' => 'required|min:5|Confirmed|max:100',
        	'password_confirmation' => 'required|min:5|max:100',
        	'organizationName' => 'required',
        	'userType'=>'required|in:Merchant,Government Agency',
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
