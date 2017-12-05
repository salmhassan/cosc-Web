<?php

class Logout extends Controller {
    public function index() 
	{
		$log = $this->model('Log');
		$log->logout();
		session_destroy();
		header ('location:/');
	}
}