<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->passes()){
			$user = new User;
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->password = Hash::make(Input::get('password'));
			$user->admin = false;
			$user->save();

			$rel = new UserRelationship;
			$rel->user_id = $user->id;
			$rel->followed_id = $user->id;
			$rel->save();
						
			return Redirect::route('user.login')->withInput();
		} else {
			   return Redirect::route('user.create')->withErrors($validator)->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		
		$user = User::where('username', '=', $username)->firstOrFail();
		$rel = UserRelationship::checkFollowing($user->id);

		
		$data = [
			'user' => $user,
			'rel' => $rel,
			'rel_id' => UserRelationship::followingID($user->id)
		];
		return View::make('users.show', $data);
		// $last_query = end($queries);
		// dd($queries);
		// Log::info(print_r($last_query, true));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function login() {
		return View::make('users.login');
	}
	public function postLogin() {
		$validator = Validator::make(Input::all(), ['username' => 'required', 'password' => 'required']);

		if($validator->passes()){
			if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')] ))
			{
				return Redirect::intended('/');
			} 
			else 
			{
				return Redirect::route('user.signin')
	        			->with('message', 'Your username/password combination was incorrect')
	        			->withInput();
			}
		}
		return Redirect::route('user.signin')->withErrors($validator)->withInput();
	}
	public function logout() {
		Auth::logout();
		return Redirect::route('user.login');
	}
}