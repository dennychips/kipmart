<?php

class UserRelationshipController extends \BaseController {

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		if(Request::ajax())
		{
			// dd(Input::all());
			
			// $current_user = Auth::user()->id;
			// $relations = new UserRelationship;
			// $relations->user_id = $current_user;
			// $relations->followed_id = Input::get('user_id');
			// $relations->save();
			
			// print_r(Input::all());
			$user = User::find(Auth::user()->id);
			$followed_user = User::find(Input::get('user_id'));
			$user->follow()->save($followed_user);
			$rel = UserRelationship::where('user_id', '=',$user->id)->where('followed_id', '=', $followed_user->id)->first();
			
			$data = ['id' => $rel->id];


			$unfollow = View::make('_partials.unfollow', $data)->render();
			return Response::json(['html' => $unfollow]);
		}

		echo 'You Cannot Access this page directly';

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		if (Request::ajax())
		{
		    $rel = UserRelationship::find($id);
		    // print_r(DB::getQueryLog());
		    // dd($rel->id . ' ' . $rel->followed_id);
		    $rel->delete($id);
			$data = array('user_id' => $rel->followed_id );
		    $followform = View::make('_partials.follow', $data)->render();
		    // var_dump($followform);
		    return Response::json(array('html' => $followform));
		}
		echo 'You Cannot Access this page directly';		
	}

}