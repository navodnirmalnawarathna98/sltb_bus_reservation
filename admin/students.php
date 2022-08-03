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

    <form action="code2.php" method="POST">
        <div class="modal-body">
                <div class="form-group">
                    <label > Full Name </label>
                    <input type="text" name="full_name" value="<?php if(isset($_POST['full_name'])){ echo $_POST['full_name']; } ?>" class="form-control"  placeholder=" Enter Full Name">
                </div>

                <div class="form-group">
                    <label > Date of Birth </label>
                    <input type="text" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; } ?>" class="form-control"  placeholder=" Enter Date of Birth">
                </div>
                
                <div class="form-group">
                    <label > Age </label>
                    <input type="number" min="7" max="18" name="age" value="<?php if(isset($_POST['age'])){ echo $_POST['age']; } ?>"  class="form-control"  placeholder=" Enter Age">
                </div>

                <div class="form-group">
                    <label > School </label>
                    <input type="text" name="school" value="<?php if(isset($_POST['school'])){ echo $_POST['school']; } ?>"  class="form-control"   placeholder=" Enter School">
                </div>

                <div class="form-group">
                    <label > Address </label>
                    <input type="text" name="address" value="<?php if(isset($_POST['address'])){ echo $_POST['address']; } ?>"  class="form-control"  placeholder=" Enter Address">
                </div>
                 
                <div class="form-group">
                    <label > Root No </label>
                    <input type="text" name="root_no" value="<?php if(isset($_POST['root_no'])){ echo $_POST['root_no']; } ?>" class="form-control"  placeholder=" Enter Root No">
                </div>

                <div class="form-group">
                    <label > Issued Date </label>
                    <input type="text"  name="issued_date" value="<?php if(isset($_POST['issued_date'])){ echo $_POST['issued_date']; } ?>" class="form-control"  placeholder=" Enter Issued Date">
                </div>

                <div class="form-group">
                    <label > Expire Date </label>
                    <input type="text" name="exp_date" value="<?php if(isset($_POST['exp_date'])){ echo $_POST['exp_date']; } ?>" class="form-control"  placeholder=" Enter Issued Date">
                </div>

                <div class="form-group">
                    <label > User Name </label>
                    <input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>" class="form-control"  placeholder=" Enter User Name">
                </div>

                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control" placeholder=" Enter password">
                </div>

                <div class="form-group">
                    <label >Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder=" Enter Confirmpassword">
                </div>  
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="stu_btn" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>

<div class="container-fluid">
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Students profile 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Students Profile
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
               $query = "SELECT * FROM students";
               $query_run = mysqli_query($connection, $query);   
           ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>School</th>
                            <th>Address</th>
                            <th>Root No</th>
                            <th>Issued Date </th>
                            <th>Expire Date </th>
                            <th>User Name </th>
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
                            <td><?php  echo $row['stu_id'];?></td>
                            <td><?php  echo $row['full_name'];?></td>
                            <td><?php  echo $row['dob'];?></td>
                            <td><?php  echo $row['age'];?></td>
                            <td><?php  echo $row['school'];?></td>
                            <td><?php  echo $row['address'];?></td>
                            <td><?php  echo $row['root_no'];?></td>
                            <td><?php  echo $row['issued_date'];?></td>
                            <td><?php  echo $row['exp_date'];?></td>
                            <td><?php  echo $row['username'];?></td>
                            <td>
                            <form action="students_edit.php" method="post" >
                              <input type="hidden" name="stu_id" value="<?php  echo $row['stu_id'];?>">
                              <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            </td>
                            <td>
                            <form action="code2.php"  method="post">
                              <input type="hidden" name="stu_delete_id" value="<?php  echo $row['stu_id'];?>">
                              <button type="submit" name="stu_delete_btn" class="btn btn-danger" >DELETE</button>
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


