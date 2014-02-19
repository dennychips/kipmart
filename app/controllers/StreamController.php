<?php 

// use Carbon\Carbon;

class StreamController extends BaseController {
	public function index(){
		$rel = DB::table('user_relationships')->where('user_id', Auth::user()->id)->lists('followed_id');
		// print_r($rel);
		$data = [
			// 'streams' => [],
			'streams' => DB::table('posts')
						 // ->where('user_id', Auth::user()->id)
						 ->whereIn('user_id', $rel)
						 ->join('users', 'users.id', '=', 'posts.user_id')
						 ->orderBy('posts.created_at', 'desc')
						 ->select('posts.message', 'users.username', 'users.firstname', 'users.lastname', 'posts.created_at')
						 ->paginate(100),
		];
		// $stream = User::with('feeds')->get();
		// print_r($data['streams']);
		// print_r(DB::getQueryLog());
		return View::make('stream.index', $data);
	}
}