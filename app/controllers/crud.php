<?php 
class crud extends Controller 
{
    public function index() 
	{
        $notes = $this->model('Notes');
		// if (isset($_POST['username'])) {
        //    $user->username = $username;
        //}
       return $notes->read();
		//   header('Location: /home');
    }
	
	public function mylogs()
	{
		$logs = $this->model('Log');
		return $logs->mylogs();
	}
	
	public function create() 
	{
		$notes = $this->model('Notes');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$subject = $_POST['subject'];
			$description = $_POST['description'];
			$notes->create($subject, $description);
		}
		//$this->view('create');
		header('Location: /home');
	}
	
	public function update()
	{
		
		$notes = $this->model('Notes');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$id = $_POST['id'];
			$subject = $_POST['subject'];
			$description = $_POST['description'];			
			$notes->update($id,$subject, $description);
		}
		header('Location: /home');
	}
	
	public function delete()
	{
		$notes = $this->model('Notes');
		$notes->remove($_GET['id']);
		header('Location: /home');
	}
	
	public function getLastLogin()
	{
		$logs = $this->model('Log');
		return $logs->getLastLogin();
	}
	
	public function  getTotalLongAttemptsToday()
	{
		$logs = $this->model('Log');
		return $logs->getTotalLongAttemptsToday();
	}
}
