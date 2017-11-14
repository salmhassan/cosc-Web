<?php
    include '../connect.php';
    session_start();

    if(isset($_SESSION['pwd'])){
      echo "<script>alert('Incorrect Password...');</script>";
      session_destroy();
    }
    if(isset($_SESSION['inUser'])){
      echo "<script>alert('Incorrect Username...');</script>";
      session_destroy();
    }
    if(isset($_SESSION['newUser'])){
      echo "<script>alert('User created successfully , Please Login to Continue...');</script>";
      session_destroy();
    }

    if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = $_POST['pwd'];
      $sql = "select * from users where username='$username'";
      $sql_login = "select login_count from total_logins";
      $resultLogin = mysqli_query($con,$sql_login);
      $rowLogin = mysqli_fetch_assoc($resultLogin);
      $total_logins = $rowLogin['login_count'];
      $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($password === $row['password']){
          $total_logins = $total_logins + 1;
          $_SESSION['user'] = $row['username'];
          $_SESSION['userID'] = $row['user_id'];
          mysqli_query($con,"update total_logins set login_count = $total_logins");
          header('location:user.php');
        }else{
          $_SESSION['pwd'] = "SET";
          header("location:home.php");
        }
      }else{
          $_SESSION['inUser'] = "SET";
          header("location:home.php");
      }
        
        
    }

    if(isset($_POST['register'])){
      $username = $_POST['username'];
      $pwd = $_POST['pwd'];
      $rpwd = $_POST['rpwd'];

      if($pwd === $rpwd){
        mysqli_query($con,"insert into users values(NULL,'$username','$pwd')");
        $_SESSION['newUser'] = "SET";
        header("location:home.php");
      }else{
        $_SESSION['pwd'] = "SET";
        header("location:home.php");
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

    
    <title>Welcome</title>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="home.php">To DO</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Home</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a data-toggle="modal" href="#registerModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a data-toggle="modal" href="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </ul>
</div>
  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required />
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" name="login" class="btn btn-success">Login</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="rpwd" id="rpwd" placeholder="Repeat Password" required />
            </div>
            <button type="submit" name="register" class="btn btn-success">Register</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</nav>