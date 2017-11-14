<?php
require_once 'header/private_header.php';
if(!isset($_SESSION['user'])){
    header('Location:home.php');
}
require_once 'reminder.php';    
require_once 'footer/private_footer.php';
?>