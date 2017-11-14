<?php
        require_once("header/public_header.php");
        if(isset($_SESSION['user'])){
            header('Location:user.php');
        }
    
?>

<div class="container">
    <div class="well">
        <p> Welcome to the TO DO / Reminders Application Please Login to continue</p>
    </div>
</div>

<?php
        require_once("footer/public_footer.php");
    
?>




