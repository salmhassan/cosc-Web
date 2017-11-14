<?php

$user_id = $_SESSION['userID'];
$sql = "select * from last_login where user_id =$user_id";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo "<div class='container'><div class='well' style='text-align:center;'><b> Your Last Login Was : ".$row['last_login_date']."</b></div></div>";
}else{
    $_SESSION['newUser'] = "SET";
    echo "<div class='container'><div class='well'><b> Your Last Login Was : Just Now</b></div></div>";
}


?>