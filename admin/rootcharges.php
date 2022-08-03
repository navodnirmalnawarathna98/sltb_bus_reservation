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


             <!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ez Booking </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="code.php" method="POST">
        <div class="modal-body">
                <div class="form-group">
                    <label > Route No </label>
                    <input type="number" name="root_no" class="form-control"  placeholder=" Enter Root No">
                </div>
                
                <div class="form-group">
                    <label > Route Start </label>
                    <input type="text" name="root_start" class="form-control"  placeholder=" Enter Root Start">
                </div>

                <div class="form-group">
                    <label > Monthly Price </label>
                    <input type="text" name="monthly_price" class="form-control"  placeholder=" Enter Monthly Price">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="root_btn" class="btn btn-primary">Save</button>
        </div>
    </form>


    </div>
  </div>
</div>


<div class="container-fluid">
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Route Charges
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Route Charges
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
               $query = "SELECT * FROM rootcharges";
               $query_run = mysqli_query($connection, $query);   
           ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Charge ID</th>
                            <th>Route No</th>
                            <th>Route Start</th>
                            <th>Monthly Price</th>
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
                            <td><?php  echo $row['charge_id'];?></td>
                            <td><?php  echo $row['root_no'];?></td>
                            <td><?php  echo $row['root_start'];?></td>
                            <td><?php  echo $row['monthly_price'];?></td>
                            <td>
                            <form action="rootcharges_edit.php" method="post" >
                              <input type="hidden" name="edit_charge_id" value="<?php  echo $row['charge_id'];?>">
                              <button type="submit" name="root_edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            </td>
                            <td>
                            <form action="code.php"  method="post">
                              <input type="hidden" name="root_delete_id" value="<?php  echo $row['charge_id'];?>">
                              <button type="submit" name="root_delete_btn" class="btn btn-danger" >DELETE</button>
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