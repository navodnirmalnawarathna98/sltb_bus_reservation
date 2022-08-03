<?php

session_start();

$connection = mysqli_connect("localhost","root","","sltb");



if(isset($_POST['registerbtn']))
{
    
    $emp_name = $_POST['emp_name'];
    $password = $_POST['password'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $cpassword = $_POST['Confirmpassword'];

    if($password === $cpassword )
    {
        $query = "INSERT INTO employe (emp_name,password,nic,address,mobile) VALUES ('$emp_name','$password','$nic','$address','$mobile') ";
        $query_run = mysqli_query($connection,$query);
        
        
        if($query_run)
        {
            $_SESSION['success'] = "Admin profile Added";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['success'] = "Admin profile not Added";
            header('Location: register.php');
            
        }

    }
    else
    {
        $_SESSION['success'] = "Password and Confirm Password Dose Not Match";
        header('Location: register.php');
    }

}

if(isset($_POST['updatebtn']))
{   
    $emp_id = $_POST['edit_id'];
    $emp_name = $_POST['edit_emp_name'];
    $password = $_POST['edit_password'];
    $nic = $_POST['edit_nic'];
    $address = $_POST['edit_address'];
    $mobile = $_POST['edit_mobile'];

    $query = "UPDATE employe SET emp_name='$emp_name', password='$password', nic='$nic', address='$address', mobile='$mobile'  WHERE emp_id ='$emp_id' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location: register.php');
    }
   
}

if(isset($_POST['delete_btn']))
{
    $emp_id = $_POST['delete_id'];
    $query = "DELETE  FROM employe WHERE emp_id ='$emp_id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not DELETED";
        header('Location: register.php');
    }
   

}


if(isset($_POST['login1_btn']))
{

    $emp_name_login = $_POST['emp_name'];
    $password_login = $_POST['password'];
    
    $query = "SELECT * FROM employe WHERE emp_name='$emp_name_login' AND  password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
    
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['emp_name'] = $emp_name_login;
        header('Location: admin.php');
    }
    else
    {
        $_SESSION['status'] = 'Email ID /Password Invalid';
        header('Location: login.php'); 
    }

}



// students login



if(isset($_POST['login_btn']))
{

    $username_login = $_POST['username'];
    $password_login = $_POST['password'];
    
    $query = "SELECT * FROM students WHERE username='$username_login' AND  password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
    
    if(mysqli_fetch_array($query_run))
    {    
        
        foreach($query_run as $row)
        {
            $_SESSION['stu_id'] = $row['stu_id'];
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['school'] = $row['school'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['root_no'] = $row['root_no'];
        }    
        $_SESSION['username'] = $username_login;                
        header('Location: getseason.php');
    }
    else
    {
        $_SESSION['status'] = 'Email ID /Password Invalid';
        header('Location: stulog.php'); 
    }

}



//  root charges


if(isset($_POST['root_btn']))
{
    
           
    $root_no = $_POST['root_no'];
    $root_start = $_POST['root_start'];
    $monthly_price = $_POST['monthly_price'];
  
    
    
    
        $query = "INSERT INTO rootcharges (root_no,root_start,monthly_price) VALUES ('$root_no','$root_start','$monthly_price') ";
        $query_run = mysqli_query($connection,$query);
        
        
        if($query_run)
        {
            $_SESSION['success'] = "All Data Added";
            header('Location: rootcharges.php');
        }
        else
        {
            $_SESSION['success'] = "All Data not Added";
            header('Location: rootcharges.php');
            
        }



}



//  root charges update

if(isset($_POST['update_root_btn']))
{   
    $charge_edit_id = $_POST['charge_edit_id'];
    $root_no = $_POST['edit_root_no'];
    $root_start = $_POST['edit_root_start'];
    $monthly_price = $_POST['edit_monthly_price'];

    

    $query = "UPDATE rootcharges SET root_no='$root_no', root_start='$root_start', monthly_price='$monthly_price'WHERE charge_id ='$charge_edit_id' ";
    $query_run = mysqli_query($connection,$query);
    var_dump($query);
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: rootcharges.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location: rootcharges.php');
    }
   
}


//  root charges delete

if(isset($_POST['root_delete_btn']))
{
    $charge_id = $_POST['root_delete_id'];
    $query = "DELETE  FROM rootcharges WHERE charge_id ='$charge_id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: rootcharges.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not DELETED";
        header('Location: rootcharges.php');
    }
   

}













?>