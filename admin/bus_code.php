<?php

session_start();

$connection = mysqli_connect("localhost","root","","sltb");

// buses add 

if(isset($_POST['busbtn']))
{
    
           
    $number_seats = $_POST['number_seats'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];
    $route_no = $_POST['route_no'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $price_per_seats = $_POST['price_per_seats'];
  
    
    
    
        $query = "INSERT INTO bus (number_seats,departure_time,arrival_time,route_no,start,end,price_per_seats) VALUES ('$number_seats','$departure_time','$arrival_time','$route_no','$start','$end','$price_per_seats') ";
        $query_run = mysqli_query($connection,$query);
        
        
        if($query_run)
        {
            $_SESSION['success'] = "All Data Added";
            header('Location: buses.php');
        }
        else
        {
            $_SESSION['success'] = "All Data not Added";
            header('Location: buses.php');
            
        }



}

//  bus update

if(isset($_POST['update_bus_btn']))
{   

    $bus_edit_id = $_POST['bus_edit_id'];
    $edit_number_seats = $_POST['edit_number_seats'];
    $edit_departure_time = $_POST['edit_departure_time'];
    $edit_arrival_time = $_POST['edit_arrival_time'];
    $edit_route_no = $_POST['edit_route_no'];
    $edit_start = $_POST['edit_start'];
    $edit_end = $_POST['edit_end'];
    $edit_price_per_seats = $_POST['edit_price_per_seats'];
    

    $query = "UPDATE bus SET number_seats='$edit_number_seats', departure_time='$edit_departure_time', arrival_time='$edit_arrival_time', route_no = '$edit_route_no',start='$edit_start',end='$edit_end', price_per_seats='$edit_price_per_seats'   WHERE bus_id ='$bus_edit_id' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: buses.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location: buses.php');
    }
   
}

// bus delete

if(isset($_POST['delete_bus_btn']))
{
    $delete_bus_id = $_POST['delete_bus_id'];
    $query = "DELETE  FROM bus WHERE bus_id ='$delete_bus_id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: buses.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not DELETED";
        header('Location: buses.php');
    }
   

}





?>