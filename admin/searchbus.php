<?php 

    //  session_start();
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

<div class="container-fluid">
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Select Bus
            </h6>
        </div>
        <div class="card-body">  

           <div class="table-responsive">
           <?php
                $connection = mysqli_connect("localhost","root","","sltb");
                $search_date = "";
            if(isset($_POST['search_bus_btn']))
            {
                $start = $_POST['departure'];
                $end = $_POST['arrival'];
                $search_date = $_POST['search_date'];
                $query = "SELECT * FROM bus WHERE start='$start' AND end='$end'";
                $query_run = mysqli_query($connection, $query);               
            
            }
           ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Number Seats</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Route No</th>
                            <th>Price Per Seats</th>
                            <th>Select</th>  
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                        ?>
                        <tr>
                            <td><?php  echo $row['bus_id'];?></td>
                            <td><?php  echo $row['number_seats'];?></td>
                            <td><?php  echo $row['departure_time'];?></td>
                            <td><?php  echo $row['arrival_time'];?></td>
                            <td><?php  echo $row['route_no'];?></td>
                            <td><?php  echo $row['price_per_seats'];?></td>
                            <td>
                            <form action="seatsbook.php" method="post" >
                              <input type="hidden" name="booking_date" value="<?php if(!empty($search_date)){echo $search_date;}?>">
                              <input type="hidden" name="bus_id" value="<?php  echo $row['bus_id'];?>">
                              <button type="submit" name="select_bus" class="btn btn-success">Select Bus</button>
                            </form>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                         else
                         {
                           echo "No Record Found";
                         }

                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

        </div>
      <!-- End of Main Content -->
      <?php 
    include('includes2/footer.php');
    include('includes2/scripts.php');
?>