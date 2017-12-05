<?php

class Notes
 {

    public $id;
    public $subject;
	public $description;
	public $createdDate;
	public $username;

    public function __construct() {
        
    }

	public function read()
	{
		
		$db = db_connect();
        $statement = $db->prepare("select * from notes where :username = username");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	public function remove($id)
	{
		$db = db_connect();
		$sql = "DELETE FROM notes WHERE reminderID= '".$id."'";
		$db->exec($sql);
		
	}
	
	public function update($id, $subject, $description)
	{
		$db = db_connect();
		$sql = "UPDATE notes SET subject= '".$subject."', description = '".$description."' WHERE reminderID= '".$id."'";
		$db->exec($sql);
	}
	
	public function create($subject, $description)
	{
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO notes (subject,description)"
                . " VALUES (:subject,:description); ");

        $statement->bindValue(':subject', $subject);		
        $statement->bindValue(':description', $description);
        $statement->execute();	
	}

}
