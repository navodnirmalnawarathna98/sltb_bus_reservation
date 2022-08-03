<?php 

    session_start();
    //  include('security.php');
    include('includes2/header.php');
    include('includes2/navbar.php');
   
?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
     
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
 <!-- End of Topbar -->


 <!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>CodePen - POS Receipt Template Html Css</title>

  <style>
@media print {
    .page-break { display: block; page-break-before: always; }
}
      #invoice-POS {
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding: 2mm;
  margin: 0 auto;
  width: 96mm;
  background: #FFF;
}
#invoice-POS ::selection {
  background: #f31544;
  color: #FFF;
}
#invoice-POS ::moz-selection {
  background: #f31544;
  color: #FFF;
}
#invoice-POS h1 {
  font-size: 1.5em;
  color: #222;
}
#invoice-POS h2 {
  font-size: .9em;
}
#invoice-POS h3 {
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
#invoice-POS p {
  font-size: 1em;
  color: #666;
  line-height: 1.2em;
}
#invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
  /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}
#invoice-POS #top {
  min-height: 100px;
}
#invoice-POS #mid {
  min-height: 80px;
}
#invoice-POS #bot {
  min-height: 50px;
}
#invoice-POS #top .logo {
    height: 72px;
    width: 137px;
    /* background: url(http://michaeltruong.ca/images/logo1.png) no-repeat; */
    background: url(img/01.png) no-repeat;
    background-size: 128px 68px;
}
#invoice-POS .clientlogo {
  float: left;
  height: 60px;
  width: 60px;
  background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
  background-size: 60px 60px;
  border-radius: 50px;
}
#invoice-POS .info {
  display: block;
  margin-left: 4px;
}
#invoice-POS .title {
  float: right;
}
#invoice-POS .title p {
  text-align: right;
}
#invoice-POS table {
  width: 100%;
  border-collapse: collapse;
}
#invoice-POS .tabletitle {
  font-size: .5em;
  background: #EEE;
}
#invoice-POS .service {
  border-bottom: 1px solid #EEE;
}
#invoice-POS .item {
  width: 24mm;
}
#invoice-POS .itemtext {
  font-size: .5em;
}
#invoice-POS #legalcopy {
  margin-top: 5mm;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >


  <div id="invoice-POS">

    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>Booking Ticket</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->

    <?php
        $last_id = $_SESSION['lastId'];

        if(isset($last_id) && !empty($last_id)){

          $connection = mysqli_connect("localhost","root","","sltb");
          $query = "SELECT * FROM booking WHERE booking_id = '$last_id'";
          $query_run = mysqli_query($connection, $query); 
          
    ?>
    <div id="mid">
      <div class="info">
       
        <?php
         if(mysqli_num_rows($query_run) > 0)
         {
             while($row = mysqli_fetch_assoc($query_run))
            {
              $array = explode(',', $row['seat_nos']);
        ?>


        <p> 
            Booking ID         : <?php  echo $row['booking_id'];?></br>	
            Bus ID             : <?php  echo $row['bus_id'];?></br>
            Booking Date       : <?php  echo $row['date'];?></br>
            Depature Time      : <?php  echo $row['depature_time'];?></br>
            Seat Numbers       : <b><?php  echo $row['seat_nos'];?></b></br>
            No of Seats        : <b><?php  echo count($array);?></b></br>
            Total Amount       : <b><?php  echo (float)((int)count($array) * 500);?></b></br>
            Booked Time        : <?php  echo $row['booked_time'];?></br>
            Booked Date        : <?php  echo $row['booked_date'];?></br>
            Passenger Nic      : <b><?php  echo $row['passenger_nic'];?></b></br>
            Passenger Name     : <?php  echo $row['passenger_name'];?></br>
            Passenger Mobile No : <?php  echo $row['passenger_mobile_no'];?></br>
        </p>

        <?php
           }
              }
           else
             {
               echo "No Record Found";
                }
                unset($_SESSION['lastId']);
        }
        ?>



      </div>
    </div><!--End Invoice Mid-->

    <div id="bot">

                    <div id="table">
                        <table>
                            <tr class="tabletitle">
                                <!-- <td class="item"><h2>Item</h2></td>
                                <td class="Hours"><h2>Qty</h2></td>
                                <td class="Rate"><h2>Sub Total</h2></td> -->
                            </tr>

                            <tr class="service">
                                <!-- <td class="tableitem"><p class="itemtext">Communication</p></td>
                                <td class="tableitem"><p class="itemtext">5</p></td>
                                <td class="tableitem"><p class="itemtext">$375.00</p></td> -->
                            </tr>


                        </table>
                    </div>


                </div>
  </div>






</body>

</html>




</div>
      <!-- End of Main Content -->
      <?php 
    include('includes2/footer.php');
    include('includes2/scripts.php');
?>