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
             Edit Students profile     
            </h6>
        </div>
    
        <div class="card-body">
        <?php

                $connection = mysqli_connect("localhost","root","","sltb");
                if(isset($_POST['edit_btn']))
                    {
                        $stu_id = $_POST['stu_id'];

                        $query = "SELECT * FROM students WHERE stu_id ='$stu_id'";
                        $query_run = mysqli_query($connection, $query);
                        
                        foreach($query_run as $row)
                        {
                            ?>

                <form action="code2.php" method="POST" >
                <input type="hidden" name="edit_stu_id" value="<?php  echo $row['stu_id']?>">
                <div class="form-group">
                    <label > Full Name </label>
                    <input type="text" name="edit_full_name" value="<?php echo $row['full_name']?>" class="form-control"  placeholder=" Enter Full Name">
                </div>

                <div class="form-group">
                    <label > Date of Birth </label>
                    <input type="text" name="edit_dob" value="<?php echo $row['dob']?>" class="form-control"  placeholder=" Enter Date of Birth">
                </div>
                
                <div class="form-group">
                    <label > Age </label>
                    <input type="text" name="edit_age" value="<?php echo $row['age']?>" class="form-control"  placeholder=" Enter Age">
                </div>

                <div class="form-group">
                    <label > School </label>
                    <input type="text" name="edit_school" value="<?php echo $row['school']?>" class="form-control"  placeholder=" Enter School">
                </div>

                <div class="form-group">
                    <label > Address </label>
                    <input type="text" name="edit_address" value="<?php echo $row['address']?>" class="form-control"  placeholder=" Enter Address">
                </div>
                 
                <div class="form-group">
                    <label > Root No </label>
                    <input type="text" name="edit_root_no" value="<?php echo $row['root_no']?>" class="form-control"  placeholder=" Enter Root No">
                </div>

                <div class="form-group">
                    <label > Issued Date </label>
                    <input type="text" name="edit_issued_date" value="<?php echo $row['issued_date']?>" class="form-control"  placeholder=" Enter Issued Date">
                </div>

                <div class="form-group">
                    <label > Expire Date </label>
                    <input type="text" name="edit_exp_date" value="<?php echo $row['exp_date']?>" class="form-control"  placeholder=" Enter Issued Date">
                </div>

                <div class="form-group">
                    <label > User Name </label>
                    <input type="text" name="edit_username" value="<?php echo $row['username']?>" class="form-control"  placeholder=" Enter User Name">
                </div>

                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="edit_password" value="<?php echo $row['password']?>" class="form-control" placeholder=" Enter password">
                </div>
                 
                <a href="students.php" class="btn btn-danger">CANCEL </a>
                <button type="submit" name="update_stu_btn" class="btn btn-primary">Update </button>


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