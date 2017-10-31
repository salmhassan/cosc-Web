<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

        if (isset($_POST['username'])) {
            $user->username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            $user->password = $_POST['password'];
        }

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
		$this->view('home/register');
		
		   if(isset($_POST['register'])){
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			if($password<8){
				echo 'password should at least have 8 characters';
				die();
			}
			$hash=password_hash($password,PASSWORD_DEFAULT);
			$user->register($username, $hash, $email);
		}
	}
}
