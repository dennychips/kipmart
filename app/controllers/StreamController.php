<?php 

// use Carbon\Carbon;

class StreamController extends BaseController {
	public function index(){
			
		$data = [
			'streams' => [],
			// 'streams' => User::with('posts')->get(),
		];
		// print_r($data['streams']);
		// print_r(DB::getQueryLog());die();
		return View::make('stream.index', $data);
	}
}