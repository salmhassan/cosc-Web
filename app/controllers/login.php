<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
        $log = $this->model('Log');

        if (isset($_POST['username'])) {
            $user->username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            $user->password = md5($_POST['password']);
        }

        $user->authenticate();

        if ($user->auth == TRUE) 
		{
            $_SESSION['auth'] = true;
			$_SESSION['username'] = $_POST['username'];
			$log->login();
        }
		else
		{		
			$log->failed();
			session_start();
			$_SESSION['attempts']++;
			if(intval($_SESSION['attempts']) >= 3)
			{
				if(!isset($_COOKIE['attempts']))
				{
				setcookie('attempts', "userLogin", time() + 60,"/"); 
				}
				unset($_SESSION['attempts']);
			}				
		}
       
        header('Location: /home');
		
    }
	
	public function register () {
		$user = $this->model('User');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$user->register($username, $password);
		}
		
		$this->view('home/register');
	}
}
