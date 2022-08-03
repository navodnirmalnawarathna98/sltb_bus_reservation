<?php
session_start();
$connection = mysqli_connect("localhost","root","","sltb");

if(isset($_POST['ajax_bus_id']))
{
    try
    {
        $ajax_bus_id = $_POST['ajax_bus_id'];
        $departure_time = $_POST['departure_time'];
        $booking_date = $_POST['booking_date'];

        $query = "SELECT * FROM booking  WHERE bus_id= '$ajax_bus_id' AND depature_time='$departure_time' AND date='$booking_date' ";
        $query_run = mysqli_query($connection,$query);
        $test = array(); 

        if(mysqli_fetch_array($query_run))
        {   //array
            foreach($query_run as  $result){
                $test[] = array(
                // 'booking_id' => $result['booking_id'],
                // 'passenger_name' => $result['passenger_name'],
                'seats_no' => $result['seat_nos']
                );
            }
        }

       if(count($test)>0){
        echo json_encode($test);
       }else
       {
           echo 'Null';
       }

    }
    catch(Exception $e)
    {
       echo $e;
    }
}

?>