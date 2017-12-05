<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from users
                                WHERE name = :name and password = :password;
                ");
        $statement->bindValue(':name', $this->username);
        $statement->bindValue(':password', $this->password);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		if ($rows) {
			$this->auth = true;
			$_SESSION['name'] = $rows[0]['name'];
			$_SESSION['age'] = $rows[0]['age'];
		}
    }
	
	public function register ($username, $password) 
	{
		$db = db_connect();
		 $statement = $db->prepare("select * from users
                                WHERE name = :name;
                ");
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		if($rows)
		{
			session_start();
			$_SESSION['message'] = "User Alread Exist.";
		}
		else
		{
        $statement = $db->prepare("INSERT INTO users (name,password)"
                . " VALUES (:name,:password); ");

        $statement->bindValue(':name', $username);
        $statement->bindValue(':password', md5($password));
        $statement->execute();
		session_start();
		$_SESSION['message'] = "You have successfully register, please go to Login page.";
		}
		
	}

}
