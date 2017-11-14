<?php 
session_start();
if(!isset($_SESSION['user'])){
  header('location:home.php');
}
include '../connect.php';
if(isset($_POST['yes'])){
  if(isset($_SESSION['newUser'])){
    mysqli_query($con,"insert into last_login values(".$_SESSION['userID'].",NULL)");
    session_destroy();
    header('location:home.php');
  }else{
    mysqli_query($con,"delete from last_login where user_id=".$_SESSION['userID']);
    mysqli_query($con,"insert into last_login values(".$_SESSION['userID'].",NULL)");
    session_destroy();
    header('location:home.php');
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>Welcome <?php echo $_SESSION['user']; ?></title>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="home.php">TO DO | Reminders</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Home</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['user'];?></a></li>
    <li><a data-toggle="modal" href="#logoutModal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
  </ul>
</div>
<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are You sure.?</h4>
        </div>
        <div class="modal-body">
        <form method="post">
            <button type="submit" name="yes" class="btn btn-success">Yes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</nav>