<?php 

    //  session_start();
     include('security.php');
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

       <!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> bus </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="bus_code.php" method="POST">
        <div class="modal-body">
                <div class="form-group">
                    <label > Number Seats </label>
                    <input type="number" name="number_seats" class="form-control"  placeholder=" Enter Number Seats">
                </div>

                <div class="form-group">
                    <label >Departure Time </label>
                    <input type="time" name="departure_time" class="form-control"  placeholder=" Enter Departure Time">
                </div>
                
                <div class="form-group">
                    <label > Arrival Time </label>
                    <input type="time" name="arrival_time" class="form-control"  placeholder=" Enter Arrival Time">
                </div>

                <div class="form-group">
                    <label > Route No </label>
                    <input type="number" name="route_no" class="form-control"  placeholder=" Enter Route No">
                </div>

                <div class="form-group">
                    <label >Start</label>
                    <input type="text" name="start" class="form-control"  placeholder=" Enter Start">
                </div>

                <div class="form-group">
                    <label >End</label>
                    <input type="text" name="end" class="form-control"  placeholder=" Enter End">
                </div>

                <div class="form-group">
                    <label >Price Per Seats</label>
                    <input type="double" name="price_per_seats" class="form-control" placeholder=" Enter Price Per Seats">
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="busbtn" class="btn btn-primary">Save</button>
        </div>
    </form>



    </div>
  </div>
</div>

<div class="container-fluid">
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">bus
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add bus Profile
                </button>
            </h6>
        </div>
        <div class="card-body">  
        <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='' )
        {
          echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].' </h2>';
          unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
        {
          echo '<h2 class="bg-danger" > '.$_SESSION['status'].' </h2>';
          unset($_SESSION['status']);
        }
        ?>
          <div class="table-responsive">
          <?php
          $connection = mysqli_connect("localhost","root","","sltb");
          $query = "SELECT * FROM bus";
          $query_run = mysqli_query($connection, $query);
          ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Number Seats</th>
                            <th>departure Time</th>
                            <th>arrival Time</th>
                            <th>Route No</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Price Per Seats</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
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
                            <td><?php  echo $row['start'];?></td>
                            <td><?php  echo $row['end'];?></td>
                            <td><?php  echo $row['price_per_seats'];?></td>
                            <td>
                            <form action="bus_edit.php" method="post" >
                              <input type="hidden" name="bus_edit_id" value="<?php  echo $row['bus_id'];?>">
                              <button type="submit" name="bus_edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                             
                            </td>
                            <td>
                            <form action="bus_code.php"  method="post">
                              <input type="hidden" name="delete_bus_id" value="<?php  echo $row['bus_id'];?>">
                              <button type="submit" name="delete_bus_btn" class="btn btn-danger" >DELETE</button>
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
    include('includes/footer.php');
    include('includes/scripts.php');
?>