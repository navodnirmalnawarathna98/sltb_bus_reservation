<?php
$a=$_POST["empno"];
$b=$_POST["empname"];
$c=$_POST["Department"];
$d=$_POST["AddressLine1"];
$e=$_POST["AddressLine2"];

if(isset($_POST["submit"])){
$con = new mysqli("127.0.0.1","root","","otnew");
if($con->connect_error)
{
	echo "error";
}
else
{
	echo "submitted";
}

	$sql = "INSERT INTO employees VALUES('$a','$b','$c','$d','$e')";
	$con->query($sql);
}




 if(isset($_POST["delete"])){ 
 $con =new mysqli("127.0.0.1","root","","otnew");    
 $sqldel = "delete from employees where empno='$a'";
    if($con -> query($sqldel)){
          echo "deleted";
        }
        else{
    
            echo "wrong";
        }

}



if(isset($_POST["update"])){
    	$con =new mysqli("127.0.0.1","root","","otnew");

			$upempno    =$_POST["empno"];
			$upempname  =$_POST["empname"];
			$upgdepart  =$_POST["Department"];
			$upadd1     =$_POST["AddressLine1"];
			$upadd2     =$_POST["AddressLine2"];
 
         $sql = "update employees set empname = '{$upempname}' ,department='{$upgdepart}' , add1='{$upadd1}' , add2='{$upadd2}' where empno= '{$upempno}'";
      
            if($con -> query($sql)){
                header($sql);
                echo "updated";	
            
            }
            else{
        
                echo $con -> error;
            }
        
        
    }



if(isset($_POST["view"])){
$con =new mysqli("127.0.0.1","root","","otnew");
$views="select * from employees where empno='$a'";
$res =$con->query($views);
$view= mysqli_fetch_assoc($res);
echo $view["empno"]; echo "<br>"; 
echo $view["empname"]; echo "<br>";
echo $view["department"]; echo "<br>";
echo $view["add1"]; echo "<br>";
echo $view["add2"]; 
}

?>