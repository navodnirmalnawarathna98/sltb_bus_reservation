<?php 

    //  session_start();
    //  include('security.php');
    include('includes2/header.php');
    include('includes2/navbar.php');
    $booking_date = null;
    $bus_id = null;
    if(isset($_POST['select_bus']))
    {
      $bus_id = $_POST['bus_id'];
      $booking_date = $_POST['booking_date'];
      $connection = mysqli_connect("localhost","root","","sltb");
      $query = "SELECT * FROM bus WHERE bus_id ='$bus_id'";
      $query_run = mysqli_query($connection, $query);
      
      foreach($query_run as $row)
      {
         $start = $row['start'];
         $end = $row['end'];
         $departure_time = $row['departure_time'];
         $arrival_time = $row['arrival_time'];
         $route_no = $row['route_no'];
      }

    }
   
?>
    <link rel="stylesheet" href="css/bus/style.css" />
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
                <img class="img-profile rounded-circle" src="#">
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

      <form action="booking_code.php" method="post">
        <div class="modal-header">Booking Date:  
          <?php if(isset($booking_date)&& !empty($booking_date)){ echo $booking_date; }?>
        </div>
        <div class="modal-body">
                <input type="hidden" name="booking_date" value="<?php if(!empty($booking_date)){echo $booking_date;}?>">
                <input type="hidden" name="bus_id" value="<?php if(!empty($bus_id)){echo $bus_id;}?>">
                <input type="hidden" name="selected_seat_nos" id="selected_seat_nos" >
                <div class="form-group">
                    <label > Passenger Nic </label>
                    <input type="text" name="passenger_nic" value="" class="form-control"  placeholder="Enter Passenger Nic">
                </div>

                <div class="form-group">
                    <label >Passenger Name </label>
                    <input type="text" name="passenger_name" value="" class="form-control"  placeholder="Enter Passenger Name ">
                </div>
                
                <div class="form-group">
                    <label > Passenger Mobile No </label>
                    <input type="number" name="passenger_mobile_no" value=""  class="form-control"  placeholder=" Enter Passenger Mobile No">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="booking_btn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

      <!-- model end -->
<?php
  if(!empty($start) && !empty($end) && !empty($departure_time) && !empty($arrival_time) && !empty($route_no)){

?>

<ul class="row">
  <li class="col-md-4">
    <div>START: <?php  echo ucwords( $start);?></div>
  </li>
  <li class="col-md-4">
    <div>END: <?php  echo ucwords($end);?></div>
  </li>
  <li class="col-md-4">
    <div>Departure time: <?php  echo ucwords($departure_time);?></div>
  </li>
</ul>

    <ul class="showcase col-md-6">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected_demo"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>
    <div class="container seats-order">
    <input type="hidden" name="selected_bus_id" id="selected_bus_id" value="<?php if(!empty($bus_id)){echo $bus_id;}?>">
    <input type="hidden" name="selected_departure_time" id="selected_departure_time" value="<?php if(!empty($departure_time)){echo $departure_time;}?>">
    <input type="hidden" name="selected_booking_date" id="selected_booking_date" value="<?php if(!empty($booking_date)){echo $booking_date;}?>">
      <div class="row">
        <div id="seat_no_1" class="seat text-light">1</div>
        <div id="seat_no_2" class="seat text-light">2</div>
        <div id="seat_no_3" class="seat text-light">3</div>
        <div id="seat_no_4" class="seat text-light">4</div>
      </div>

      <div class="row">
        <div id="seat_no_5" class="seat text-light">5</div>
        <div id="seat_no_6" class="seat text-light">6</div>
        <div id="seat_no_7" class="seat text-light">7</div>
        <div id="seat_no_8" class="seat text-light">8</div>
      </div>
      
      <div class="row">
        <div id="seat_no_9" class="seat text-light">9</div>
        <div id="seat_no_10" class="seat text-light">10</div>
        <div id="seat_no_11" class="seat text-light">11</div>
        <div id="seat_no_12" class="seat text-light">12</div>
      </div>

      <div class="row">
        <div id="seat_no_13" class="seat text-light">13</div>
        <div id="seat_no_14" class="seat text-light">14</div>
        <div id="seat_no_15" class="seat text-light">15</div>
        <div id="seat_no_16" class="seat text-light">16</div>
      </div>

      <div class="row">
        <div id="seat_no_17" class="seat text-light">17</div>
        <div id="seat_no_18" class="seat text-light">18</div>
        <div id="seat_no_19" class="seat text-light">19</div>
        <div id="seat_no_20" class="seat text-light">20</div>
      </div>

      <div class="row">
        <div id="seat_no_21" class="seat text-light">21</div>
        <div id="seat_no_22" class="seat text-light">22</div>
        <div id="seat_no_23" class="seat text-light">23</div>
        <div id="seat_no_24" class="seat text-light">24</div>
      </div>

      <div class="row">
        <div id="seat_no_25" class="seat text-light">25</div>
        <div id="seat_no_26" class="seat text-light">26</div>
        <div id="seat_no_27" class="seat text-light">27</div>
        <div id="seat_no_28" class="seat text-light">28</div>
      </div>

      <div class="row">
        <div id="seat_no_29" class="seat text-light">29</div>
        <div id="seat_no_30" class="seat text-light">30</div>
        <div id="seat_no_31" class="seat text-light">31</div>
        <div id="seat_no_32" class="seat text-light">32</div>
      </div>

      <div class="row">
        <div id="seat_no_33" class="seat text-light">33</div>
        <div id="seat_no_34" class="seat text-light">34</div>
        <div id="seat_no_35" class="seat text-light">35</div>
        <div id="seat_no_36" class="seat text-light">36</div>
      </div>

      <div class="row">
        <div id="seat_no_37" class="seat text-light">37</div>
        <div id="seat_no_38" class="seat text-light">38</div>
        <div id="seat_no_39" class="seat text-light">39</div>
        <div id="seat_no_40" class="seat text-light">40</div>
        <div id="seat_no_41" class="seat text-light">41</div>
        <div id="seat_no_42" class="seat text-light">42</div>
      </div>
    </div>
    <p class="text seats-order">You have selected 
        <span id="count">0</span> 
        seats for a price of Rs
        <span id="price">0</span>
        <button type="button" id="btn_continue" class="btn btn-outline-success" data-toggle="modal" data-target="#addadminprofile" >Continue </button>
    </p>
    
<?php

}
?>
    <script src="js/bus/script.js" type="text/javascript"></script>

</div>
      <!-- End of Main Content -->
      <?php 
    include('includes2/footer.php');
    include('includes2/scripts.php');
?>
<script>
  
$( document ).ready(function() {
        
    const container = document.querySelector('.container');
    const seats = document.querySelectorAll('.row .seat:not(.occupied) , .row .last_seat:not(.occupied)');
    const count = document.getElementById('count');
    const price = document.getElementById('price');
    
    let ticketPrice = 500;

    const populateUI = () => {
      const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
      if (selectedSeats !== null && selectedSeats.length > 0) {
        seats.forEach((seat, index) => {
          if (selectedSeats.indexOf(index) > -1) {
            seat.classList.add('selected');
          }
        });
      }

      //const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');
      const selectedMoviePrice = localStorage.getItem('selectedMoviePrice');

      if (selectedMoviePrice !== null) {
        count.innerText = selectedSeats.length;
        price.innerText = selectedSeats.length * +selectedMoviePrice;
      }
    };

    populateUI();

    selectedMovie = (movieIndex, moviePrice) => {
      //localStorage.setItem('selectedMovieIndex', movieIndex);
      localStorage.setItem('selectedMoviePrice', moviePrice);
    };

    const updateSelectedSeatsCount = () => {
      var seat_list = [];
      const selectedSeats = document.querySelectorAll('.row .selected');
            
      for (var i = 0; i < selectedSeats.length; i++) {


        for( var j = 0; j < seat_list.length; j++){ 
          if ( seat_list[j] === selectedSeats[i].innerHTML) { 
            seat_list.splice(j, 1); 
            j--; 
          }
        }
        seat_list.push(selectedSeats[i].innerHTML);

      }
        
        document.getElementById('selected_seat_nos').value = seat_list.toString();

      const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

      localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

      const selectedSeatsCount = selectedSeats.length;

      count.innerText = selectedSeatsCount;
      price.innerText = selectedSeatsCount * ticketPrice;

      // if(selectedSeatsCount > 0){
      //   $('#btn_continue').prop('disabled', true);
      // }else{
      //   $('#btn_continue').prop('disabled', false);
      // }

    };

    // Seat select event
    container.addEventListener('click', e => {
      if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')){
        e.target.classList.toggle('selected');
        
        updateSelectedSeatsCount();
      }
    });
    
    // $("#btn_continue").click(function(){
    //   $("#selected_seat_nos").val(seat_list.toString());
    // });
    
});
    
</script>


<script>

$(document).ready(function(){

  window.onload = function()
  {
    var allSelected = jQuery('.selected'); // getting all selected seats
        allSelected.removeClass('selected'); // remove 'selected' class name from divs when loads page

    var bus_id = $('#selected_bus_id').val();
    var departure_time = $('#selected_departure_time').val();
    var booking_date = $('#selected_booking_date').val();
    $.ajax(
      {
        type: "POST",
        url: "ajax_seatsbook.php",
        data: {
          ajax_bus_id:bus_id,
          departure_time:departure_time,
          booking_date:booking_date
        },
        dataType: 'json',
        success: function(response)
        {
          for(var j=0; j<response.length; j++)
          {
            var numbersString = response[j]['seats_no'];
            var numbersArray = numbersString.split(',');
            //console.log(numbersString);

            $.each(numbersArray, function(index, value) { 
              $("#seat_no_"+value).addClass("occupied");
            });
            
          }
        },
        error: function(XMLHHttpRequest, textStatus , errorThrown){
          // console.log(XMLHHttpRequest);
          // console.log(textStatus);
          // console.log(errorThrown);
        }
      });
  };



});






</script>