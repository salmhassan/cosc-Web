<?php

class Log
 {

    public $logid;
    public $username;
	public $state;
	public $activityTime;

    public function __construct() {
        
    }

	public function login()
	{
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO logs (username,state,activityTime)"
                . " VALUES (:username,:state, :activityTime); ");
		$state = "Login";
		$activityTime = date("Y-m-d H:i:s");
        $statement->bindValue(':username', $_SESSION['username']);		
        $statement->bindValue(':state', $state);
        $statement->bindValue(':activityTime',$activityTime);
        $statement->execute();	
	}
	
	public function logout()
	{	
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO logs (username,state,activityTime)"
                . " VALUES (:username,:state, :activityTime); ");
		$state = "Logout";
		$activityTime = date("Y-m-d H:i:s");
        $statement->bindValue(':username', $_SESSION['username']);		
        $statement->bindValue(':state', $state);
        $statement->bindValue(':activityTime',$activityTime);
        $statement->execute();	
	}
	public function failed()
	{
		$db = db_connect();
		
		   $statement = $db->prepare("INSERT INTO failedlog (address)"
                . " VALUES (:address); ");
		$activityTime = date("Y-m-d H:i:s");
		$server_ip = gethostbyname($_SERVER['SERVER_NAME']);
        $statement->bindValue(':address',$server_ip);
        //$statement->bindValue(':attemptTime',$activityTime); 	  
		$statement->execute();	
	}
	public function mylogs()
	{
		$db = db_connect();
        $statement = $db->prepare("select * from logs
                                WHERE username = :username;
                ");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		if ($rows) 
		{
			return $rows;
		}
	}
	
	public function getLastLogin()
	{
		$db = db_connect();
        $statement = $db->prepare("select * from logs
                                WHERE username = :username and state = :state;
                ");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->bindValue(':state', "Login");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		if($rows)
		{
		$len = count($rows);
		return $rows[$len-2]['activityTime'];
		}
	}
	
	public function getTotalLongAttemptsToday()
	{
		$db = db_connect();
        $statement = $db->prepare("select COUNT(*) AS total_number from logs
                                WHERE state = :state and  activityTime >= DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)
                ");
        $statement->bindValue(':state', "Login");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		if($rows)
		{
		return $rows[0]['total_number'];
		}
	}
}
