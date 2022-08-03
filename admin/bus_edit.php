<?php 

    session_start();  
    include('includes/header.php');
    include('includes/navbar.php');

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


  <div class="container-fluid">
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
             Edit Bus profile     
            </h6>
        </div>
    
        <div class="card-body">
        <?php

                $connection = mysqli_connect("localhost","root","","sltb");
                 if(isset($_POST['bus_edit_btn']))
                    {                                              
                        $bus_edit_id = $_POST['bus_edit_id'];

                        $query = "SELECT * FROM bus WHERE bus_id ='$bus_edit_id'";
                        $query_run = mysqli_query($connection, $query);
                        foreach($query_run as $row)
                        {
                            ?>

                <form action="bus_code.php" method="POST" >
                <input type="hidden" name="bus_edit_id" value="<?php  echo $row['bus_id'];?>">
                <div class="form-group">
                    <label > Number Seats </label>
                    <input type="number" name="edit_number_seats" value="<?php echo $row['number_seats']?>" class="form-control"  placeholder=" Enter Number Seats">
                </div>

                <div class="form-group">
                    <label > Departure Time </label>
                    <input type="time" name="edit_departure_time" value="<?php echo $row['departure_time']?>" class="form-control"  placeholder=" Enter Departure Time">
                </div>
                
                <div class="form-group">
                    <label > Arrival Time </label>
                    <input type="time" name="edit_arrival_time" value="<?php echo $row['arrival_time']?>" class="form-control"  placeholder=" Enter Arrival Time">
                </div>

                <div class="form-group">
                    <label > Route No </label>
                    <input type="number" name="edit_route_no" value="<?php echo $row['route_no']?>" class="form-control"  placeholder=" Enter Route No">
                </div>

                <div class="form-group">
                    <label >Start</label>
                    <input type="text" name="edit_start" value="<?php echo $row['start']?>" class="form-control"  placeholder=" Enter Start">
                </div>

                <div class="form-group">
                    <label >End</label>
                    <input type="text" name="edit_end" value="<?php echo $row['end']?>" class="form-control"  placeholder=" Enter End">
                </div>

                <div class="form-group">
                    <label > Price Per Seats</label>
                    <input type="double" name="edit_price_per_seats" value="<?php echo $row['price_per_seats']?>" class="form-control"  placeholder=" Enter Price Per Seats">
                </div>


                 
                <a href="buses.php" class="btn btn-danger">CANCEL </a>
                <button type="submit" name="update_bus_btn" class="btn btn-primary">Update </button>


                </form>
                
                
                <?php   

                    }

                 }

                 ?>     




        </div>

    </div>


  </div>
  <!-- End of Main Content -->

<?php
    include('includes/scripts.php');
    include('includes/footer.php');

?>