<?php
session_start();

if(!$_SESSION['emp_name'])
{    
    header('location: login.php');
}

?>