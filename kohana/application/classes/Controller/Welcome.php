<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function before() {
		parent::before();
	}

	public function action_index()
	{
		 $this->response->body(View::factory('welcome'));
	}

} // End Welcome
