<?php
session_start();
include('connection.php');

if(isset($_POST['stu_btn']))
{
    $sql = "SELECT COUNT(*) FROM students WHERE username=?";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($_POST['username']));
    $result = $stmt->fetch();
    // if($result[0] != 0)
    // {
    //     var_dump($result[0]);
    // }
    // else
    // {
    //     var_dump("error");
    // }
    
    
    if($result[0] == 0)
    {
        $error=array(FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE);
        $_POST["full_name"] = filter_var($_POST['full_name'],FILTER_SANITIZE_STRING);
        $_POST["dob"] = filter_var($_POST['dob'],FILTER_SANITIZE_STRING);
        $_POST["age"] = filter_var($_POST['age'],FILTER_SANITIZE_STRING);
        $_POST["school"] = filter_var($_POST['school'],FILTER_SANITIZE_STRING);
        $_POST['address'] = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
        $_POST['root_no'] = filter_var($_POST['root_no'],FILTER_SANITIZE_STRING);
        $_POST['issued_date'] = filter_var($_POST['issued_date'],FILTER_SANITIZE_STRING);
        $_POST['exp_date'] = filter_var($_POST['exp_date'],FILTER_SANITIZE_STRING);
        $_POST['username'] = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $_POST['password'] = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $_POST['cpassword'] = filter_var($_POST['cpassword'],FILTER_SANITIZE_STRING);

        $_POST['full_name'] =   trim($_POST["full_name"]);
        $_POST['dob'] =   trim($_POST["dob"]);
        $_POST['age'] =  trim($_POST["age"]);
        $_POST['school'] =  trim($_POST["school"]);
        $_POST['root_no'] =   trim($_POST["root_no"]);
        $_POST['address'] =  trim($_POST["address"]);
        $_POST['issued_date'] =  trim($_POST["issued_date"]);
        $_POST['exp_date'] =   trim($_POST["exp_date"]);
        $_POST['username'] =  trim($_POST["username"]);
        $_POST['password'] =  trim($_POST["password"]);
        $_POST['cpassword'] =  trim($_POST["cpassword"]);

        $error[0] = empty($_POST['full_name']) ? TRUE : FALSE;
        $error[1] = empty($_POST['dob']) ? TRUE : FALSE;
        $error[2] = empty($_POST['age']) ? TRUE : FALSE;
        $error[3] = empty($_POST['school']) ? TRUE : FALSE;
        $error[4] = empty($_POST['root_no']) ? TRUE : FALSE;
        $error[5] = empty($_POST['address']) ? TRUE : FALSE;
        $error[6] = empty($_POST['issued_date']) ? TRUE : FALSE;
        $error[7] = empty($_POST['exp_date']) ? TRUE : FALSE;
        $error[8] = empty($_POST['username']) ? TRUE : FALSE;
        $error[9] = empty($_POST['password']) ? TRUE : FALSE;
        $error[10] = empty($_POST['cpassword']) ? TRUE : FALSE;
    
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if (!in_array(TRUE, $error))
        {
                if($password == $cpassword )
                {
                    try 
                    {
                        $db->prepare("INSERT INTO `students` 
                        (`full_name`, `dob`, `age`, `school`, `root_no`, `address`, `issued_date`, `exp_date`, `username`, `password`) VALUES (?,?,?,?,?,?,?,?,?,?);")
                        ->execute(array(
                        $_POST['full_name'],$_POST['dob'],$_POST['age'],$_POST['school'],$_POST['root_no'],$_POST['address'],$_POST['issued_date'],$_POST['exp_date'],$_POST['username'],$_POST['password'])); 
                        
                        $_SESSION['success'] = "students profile Added";
                        header('Location: students.php');
                    }catch (PDOException $e)
                    {
                        $_SESSION['success'] = "students profile not Added";
                        header('Location: students.php');
                    }
                }

                else
                {
                    $_SESSION['success'] = "Password and Confirm Password Dose Not Match";

                    header('Location: register.php');
                }



        }
    }
    else
    {
        $_SESSION['success'] = "This username already taken";
        header('Location: students.php');
    }

}

if (isset($_POST['update_stu_btn']))
{
    $error=array(FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE,FALSE);

    // php funtions

    
    $_POST["edit_full_name"] = filter_var($_POST['edit_full_name'],FILTER_SANITIZE_STRING); 
    $_POST["edit_dob"] = filter_var($_POST['edit_dob'],FILTER_SANITIZE_STRING);
    $_POST["edit_age"] = filter_var($_POST['edit_age'],FILTER_SANITIZE_STRING);
    $_POST["edit_school"] = filter_var($_POST['edit_school'],FILTER_SANITIZE_STRING);
    $_POST['edit_address'] = filter_var($_POST['edit_address'],FILTER_SANITIZE_STRING);
    $_POST['edit_root_no'] = filter_var($_POST['edit_root_no'],FILTER_SANITIZE_STRING);
    $_POST['edit_issued_date'] = filter_var($_POST['edit_issued_date'],FILTER_SANITIZE_STRING);
    $_POST['edit_exp_date'] = filter_var($_POST['edit_exp_date'],FILTER_SANITIZE_STRING);
    $_POST['edit_username'] = filter_var($_POST['edit_username'],FILTER_SANITIZE_STRING);
    $_POST['edit_password'] = filter_var($_POST['edit_password'],FILTER_SANITIZE_STRING);
    

    $_POST['edit_full_name'] =   trim($_POST["edit_full_name"]);
    $_POST['edit_dob'] =   trim($_POST["edit_dob"]);
    $_POST['edit_age'] =  trim($_POST["edit_age"]);
    $_POST['edit_school'] =  trim($_POST["edit_school"]);
    $_POST['edit_root_no'] =   trim($_POST["edit_root_no"]);
    $_POST['edit_address'] =  trim($_POST["edit_address"]);
    $_POST['edit_issued_date'] =  trim($_POST["edit_issued_date"]);
    $_POST['edit_exp_date'] =   trim($_POST["edit_exp_date"]);
    $_POST['edit_username'] =  trim($_POST["edit_username"]);
    $_POST['edit_password'] =  trim($_POST["edit_password"]);
   

    $error[0] = empty($_POST['edit_full_name']) ? TRUE : FALSE;
    $error[1] = empty($_POST['edit_dob']) ? TRUE : FALSE;
    $error[2] = empty($_POST['edit_age']) ? TRUE : FALSE;
    $error[3] = empty($_POST['edit_school']) ? TRUE : FALSE;
    $error[4] = empty($_POST['edit_root_no']) ? TRUE : FALSE;
    $error[5] = empty($_POST['edit_address']) ? TRUE : FALSE;
    $error[6] = empty($_POST['edit_issued_date']) ? TRUE : FALSE;
    $error[7] = empty($_POST['edit_exp_date']) ? TRUE : FALSE;
    $error[8] = empty($_POST['edit_username']) ? TRUE : FALSE;
    $error[9] = empty($_POST['edit_password']) ? TRUE : FALSE;
    

    if (!in_array(TRUE, $error)) 
    {
        try {
          $sql = "UPDATE `students` SET 
          `full_name`=?, 
          `dob`=?, 
          `age`=?, 
          `school`=?, 
          `root_no`=?, 
          `address`=?, 
          `issued_date`=?, 
          `exp_date`=?, 
          `username`=? WHERE `stu_id`=? ";
          $db->prepare($sql)->execute(array(
              $_POST['edit_full_name'],
              $_POST['edit_dob'],
              $_POST['edit_age'],
              $_POST['edit_school'],
              $_POST['edit_root_no'],
              $_POST['edit_address'],
              $_POST['edit_issued_date'],
              $_POST['edit_exp_date'],
              $_POST['edit_username'],
              $_POST['edit_stu_id']));

          $_SESSION['success'] = "Your Data is Updated";
          header('Location: students.php'); 
          
        } catch (PDOException $e)         
        {
            $_SESSION['status'] = "Your Data is Not Updated";
            header('Location: students.php');
        }
   }



}

if (isset($_POST['stu_delete_btn'])) {

    try {

           
            $sql="DELETE  FROM students WHERE stu_id=?";
            $db->prepare($sql)->execute(array($_POST['stu_delete_id']));
            
 
            $_SESSION['success'] = "Your Data is DELETED";
            header('Location: students.php');

    } catch (PDOException $e) {
      
        $_SESSION['status'] = "Your Data is Not DELETED";
        header('Location: students.php');
    }
}
































?>