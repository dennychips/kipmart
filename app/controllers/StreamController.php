<?php 

// use Carbon\Carbon;

class StreamController extends BaseController {
	public function index(){
		
		$data = [
			'streams' => Post::getStream(),
		];
		
		
		return View::make('stream.index', $data);
	}
}