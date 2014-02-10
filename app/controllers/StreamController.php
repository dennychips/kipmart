<?php 

class StreamController extends BaseController {
	public function index(){
		$data = [
			'posts' => Post::all(),
		];
		return View::make('stream.index', $data);
	}
}