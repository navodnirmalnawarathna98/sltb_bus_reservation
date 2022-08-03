<?php
session_start();



if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['emp_name']);
    header('Location: login.php'); 
}











?>

