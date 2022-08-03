<?php
    // header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    // header("Pragma: no-cache"); // HTTP 1.0.
    // header("Expires: 0"); // Proxies.
    session_start();
    $connection = mysqli_connect("localhost","root","","sltb");
    $departure_time = null;

    if(isset($_POST['booking_btn']))
    {
        $bus_id = $_POST['bus_id'];        
        $q = "SELECT * FROM bus WHERE bus_id='$bus_id'";
        $q_run = mysqli_query($connection, $q);
        foreach($q_run as $row)
        {
           $departure_time = $row['departure_time'];
        }

        $booking_date = $_POST['booking_date'];       
        $passenger_nic = $_POST['passenger_nic'];
        $passenger_name = $_POST['passenger_name'];
        $passenger_mobile_no = $_POST['passenger_mobile_no'];
        $current_date = date('Y-m-d');
        $current_time =  date("H:i:s");
        $seat_nos = $_POST['selected_seat_nos'];
        
            $query = "INSERT INTO booking (
                bus_id,
                date,
                depature_time,
                seat_nos,
                booked_time,
                booked_date,
                passenger_nic,
                passenger_name,
                passenger_mobile_no) VALUES  (
                    '$bus_id',
                    '$booking_date',
                    '$departure_time',
                    '$seat_nos',
                    '$current_time',
                    '$current_date',
                    '$passenger_nic',
                    '$passenger_name',
                    '$passenger_mobile_no') ";
            
            $query_run = mysqli_query($connection,$query);            
            
            if($query_run)
            {                
                $_SESSION['lastId'] = mysqli_insert_id($connection);
                header('Location: booking_final.php');
            }
            else
            {       
                $_SESSION['last_id'] = null;    
                header('Location: seatsbook.php');                
            }
    
    
    
    }






?>