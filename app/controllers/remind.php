<?php

class Remind extends Controller {
	
    public function index($id = '') {		
        $r = $this->model('Reminders');
		$list = $r->get_reminders();
		
		if ($id) {
		    $item = array();

		    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1){
                $item = $r->get_all_reminders();
            } else{
                $item = $r->get_reminder($id);
            }

			//print_r ($item);
            $message = "Reminder List";
			$this->view('remind/view', ['message' => $message, 'values' => $item] );
		}else {
			$this->view('remind/index', [
            'list' => $list
            ] );
		}
		
		
    }
	
	public function update($id) {
		$r = $this->model('Reminders');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		   $id = $_POST['id'];
		   $subject =$_POST['subject'];
		    $description =$_POST['description'];
			$message ="update record success";
			$this-> view ('remind/update',['message' => $message]);
	   }else {
            if (isset ($id)) {
                $this->view('remind/creat');

            }
        }
			
    }
	
	public function remove($id = '') {
		$r = $this->model('Reminders');

		if(isset($id)) {
			$r ->delete($id);
			$messsage = "delteting successfully";
			$list = $r-> readall();
		}else {
            $message = "delete the record";

        }
		$this->view ('home/index', ['message' =>$message]);

    }
	
	public function create() {
        $this->view('home/login');
    }
}