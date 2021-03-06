<?php

class PostsController extends \BaseController {
	protected $guarded = array('id', 'password');
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
		// $post = new Post;
		// $post->message = 'Hello';
		// $user = User::find(Auth::user()->id);
		// $user->posts()->save($post);

		// $feed = User::find(1)->feeds();
		// // $post = $feed->posts();
		// var_dump($feed->get());
		// print_r(DB::getQueryLog());

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), [
				'message' => 'required',
			]);
		//
		if($validator->passes()){
			$post = new Post;
			// $post->users_id = Auth::user()->id;
			$post->message = Input::get('message');
			// $post->attachments = URL('assets/uploads/img.png');
			// $post->save();
			$user = User::find(Auth::user()->id);
			// $user->posts()->attach($post->id);
			$user->posts()->save($post);

			
			// dd(DB::getQueryLog());
			// $user->feeds()->save($post);
			// dd(DB::getQueryLog());
			return Redirect::to('/');
		}


		// $feed = new Feed;
		// $feed->post_id = $post->id;
		// $feed->sender_id = Auth::user()->id;
		// $feed->save();
		// print_r(DB::getQueryLog());
		

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
		//
	}

}