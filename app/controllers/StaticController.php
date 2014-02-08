<?php 

class StaticController extends BaseController {
	public function index() {
		return View::make('static.home');
	}
}