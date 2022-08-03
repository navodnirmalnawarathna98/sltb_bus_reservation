<?php
    session_start();
    include('includes2/header.php');
    include('includes2/navbar.php');
  
    // Include the qrlib file 
    include('phpqrcode/qrlib.php'); 
      
    // $text variable has data for QR  
    //$_SESSION['text'] = null; 
      
    // QR Code generation using png() 
    // When this function has only the 
    // text parameter it directly 
    // outputs QR in the browser 
    //QRcode::png($text); 

$connection = mysqli_connect("localhost","root","","sltb");
if(isset($_POST['get_season']))
{    
    $stu_id = $_SESSION['stu_id'];
    $full_name = $_SESSION['full_name'];
    $age = $_SESSION['age'];
    $address = $_SESSION['address'];
    $school = $_SESSION['school'];
    $root_no = $_SESSION['root_no'];
    $dob = $_SESSION['dob'];
    $date = date('Y-m-d');

    $query = "INSERT INTO season (student_id,created_at,created_by) VALUES ('$stu_id','$date','1') ";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
      $_SESSION['text']  = "Full Name : ".$full_name."\n Date of Birth : ".$dob."\n Age : ".$age."\n School : ".$school."\n Address : ".$address."\n Root No : ".$root_no;
    }
        
    


}

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
    <form method="POST">
      <div class="card shadow mb-4">
          <div class="card-header py-3"></div>
                  <div class="card-body"> 
                      <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <div class="col-md-12 mb-3">                                
                                  <p> 
                                      Full Name          : <?php  echo $_SESSION['full_name'];?></br>	
                                      Date of Birth      : <?php  echo $_SESSION['dob'];?></br>
                                      Age                : <?php  echo $_SESSION['age'];?></br>
                                      School             : <?php  echo $_SESSION['school'];?></br>
                                      Address            : <?php  echo $_SESSION['address'];?></br>
                                      Root No            : <?php  echo $_SESSION['root_no'];?></br>
                                  </p>
                                </div>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                <label for="select_root">Start</label>
                                <select class="custom-select" id="select_root" required>
                                    <option selected disabled value="">Select Root</option>                            
                                    <?php
                                      $connection = mysqli_connect("localhost","root","","sltb");
                                      $query = "SELECT * FROM rootcharges";
                                      $query_run = mysqli_query($connection, $query);
                                    ?>
                                    <?php
                                    if(mysqli_num_rows($query_run) > 0) //count eka 0 wda wadiyenda blno
                                    {
                                      $load=array();
                                      $i=0;
                                      while($row = mysqli_fetch_assoc($query_run))
                                      {
                                        array_push($load, $row);
                                    ?>
                                        <option data-index="<?php echo $i; ?>" value="<?php  echo $row['monthly_price'];?>"><?php  echo ucwords($row['root_start']);?></option>
                                    <?php
                                      $i++;
                                      }
                                    }else
                                    {
                                      echo "No Record Found";
                                    }        
                                    ?>
                                </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">End</label>
                                    <input type="text" class="form-control" value="Matara" readonly id="validationCustom03" required>
                                </div>
                              </div>

                              <div class="col-md-12 row" id="visible_control" style ="visibility : hidden">
                                <div class="col-md-6 mb-2">
                                    <label for="root_charge">Root Charge</label>
                                    <input type="text" class="form-control" readonly id="root_charge" required>
                                </div>
                                <div class="col-md-6 mt-4">
                                  <div class="form-btn">
                                    <button type="submit" name="get_season" class="btn btn-dark"> Get Season</a></button>
                                  </div>
                                </div>
                              </div>
                              </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </form>
    
    <?php 
      if(isset($_SESSION['text'])){
        echo "<a target = '_blank' href=qrcode/qr_generator.php>Get QR</a>";
        //echo $_SESSION['text'];
      }
    ?>
</div>

 <!-- End of Main Content -->
 <?php 
   
    include('includes/scripts.php');
?>
<script>
var opt = null;
var load = <?php echo json_encode($load);?>;
	document.getElementById("select_root").onchange = function(){
    var e = document.getElementById("select_root");
    opt = e.options[e.selectedIndex].getAttribute("value");
    //alert(opt);
    
/*load data from load array*/
    if(opt != null){
      document.getElementById("visible_control").style.visibility = "visible";
      document.getElementById("root_charge").value=opt;
    }else{
      document.getElementById("visible_control").style.visibility = "hidden";
    }
    //document.getElementById("root_charge").value=load[opt][1];
  };
</script>