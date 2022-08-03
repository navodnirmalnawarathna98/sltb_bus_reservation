<!DOCTYPE html>
<html>
<head>
	<title>SLTB </title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet"    
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>



</head>
<body>
  <!-- navigation -->
     <section  id="nav-bar">

     	<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"> <img src=""></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav  ml-auto" >

       <li class="nav-item ">
        <a class="nav-link" href="#"> HOME </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#team"> OUR WORK</a>
      </li>

        <li class="nav-item">
        <a class="nav-link"  href="stulog.php">GET YOUR SEASON</a>
        </li>

        
       <li class="nav-item">
        <a class="nav-link"  href="register.php">ADMIN</a>
        </li>


       <li class="nav-item">
        <a class="nav-link"  href="#Contact">CONTACT US</a>
      </li>

    </ul>
  </div>
</nav>
     </section>

 


<!-- first slide -->
<section id="services_new">
  <div class="row">
    <div class="col-md-6">
     <div class="booking-form">
     <form action="searchbus.php" method="POST">
       <div class="form-group">
        
           <span class="form-label">Journey From</span>
           <select name="departure" class="form-control" required>
             <option value="">Enter Your Departure Station</option>
             <option value="matara">Matara</option>
             <option value="colombo">Colombo</option>
           </select>
           <span class="select-arrow"></span>
         
       </div>
       
       <div class="form-group">
        
          <span class="form-label">Journey To</span>
          <select name="arrival" class="form-control" required>
            <option value="">Enter Your Arrival Station</option>
            <option value="colombo">Colombo</option>
            <option value="matara">Matara</option> 
          </select>
          <span class="select-arrow"></span>
      
      </div>

       <div class="row">
         <div class="col-sm-6">
           <div class="form-group">
             <span class="form-label">Select Date</span>
             <input name="search_date" class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" required>
           </div>
         </div>
       </div>

       <div class="form-btn">
         <button type="submit" name="search_bus_btn" class="btn btn-dark"> Search Buses</a></button>
       </div>
     </form>
     </div>
    </div>
    <div class="col-md-6">
     <div class="booking-cta">
       <h1>Welcome to SLTB EXPRESS online services!</h1>
       <p>Bus Booking Made Easy and Efficient in Sri Lanka
Plan journey, Reserve bus seats, Reach destination.
       </p>
         
     </div>
   </div>
  </div>
</section>



      <section class="backwrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
      </section>

<!--------About------>

<section id="about">
  <div class="container">
  <div class="row">
        <h2>About Us</h2>
        <div class="about-content">
        <h3>Your online portal to reserve Sri Lanka Transport Board passenger transit services, across Sri Lanka.</h3>
        Want your public transportation and online bus ticket booking issues sorted? We at SLTB EXPRESS will attend to all your online bus seat reservations, booking requirements and make sure that you have a safe and a comfortable journey. A unique platform of online bus booking Sri Lanka has to offer, we have made it easy for you to reserve your seats to avoid hassle and inconveniences,
         reach your destination with the comfort that you deserve. Happy Journeys!

         </div>
  <button type="button" class="btn btn-primary"> Read more>>> </button>
  </div>
</section>

 <!----------services------>

<section id="services">
	<div class="container">

		<h1>Our Services</h1>
		
	</div>

	<div class="row services ">
		
		<div class="col-md-3 text-center ">

			<div class="icon">
				<i class="fa fa-search" ></i>
			</div>
			 <h3>More Choices </h3>
			 <p> We give you maximum choices across all the routes to choseyour bus.
			 </p>
		</div>
    	<div class="col-md-3 text-center ">

			<div class="icon">
				<i class="fa fa-headphones" ></i>
			</div>
			 <h3>Customer Support </h3>
			 <p>  We help you to make your journy better.
			 </p>
		</div>

		<div class="col-md-3 text-center ">

			<div class="icon">
				<i class="fa fa-credit-card" ></i>
			</div>
			 <h3>Best Price </h3>
			 <p>We always offer best bus tiket price in the market.
			 </p>
		</div>

		<div class="col-md-3 text-center ">

			<div class="icon">
				<i class="fa fa-map-marker" ></i>
			</div>
			 <h3>Google Map Location</h3>
			 <p>  We send you the boarding place and destination place link in google map.
			 </p>
		</div>

	</div>	
</section>
  
<!--------About------>

<section id="about">
  <div class="container">
  <div class="row">
        <h2> OUR WORK</h2>
        <div class="about-content">
        We provide full fledged online bus booking platform to buy and sell bus seats. The passenger can purchase bus tickets online and in return to confirm the seat reservation, a text message with the details of travel will be be sent.

  </div>
  <button type="button" class="btn btn-primary"> Read more>>> </button>
  </div>
  </section>





  <!-- promo -->
  <section id="promo">
    <div class="container">
    </div>
  </section>

<!---------Contact-------->
<section  id="Contact"> 
<div  class="container">
     <h1> Contact Us</h1>
     <div class="row">
     	<div class="col-md-6">
         <form class="Contact-form" action="emp.php" method="POST">
             <div class="form-group">
               <input type="text"  class="form-control" placeholder="Employee Number." name="empno" id="empno">
             </div>
             <div class="form-group">
               <input type="text"  class="form-control" placeholder="Empolyee Name" name="empname" id="empname">
             </div>
             <div class="form-group">
                <input type="text"  class="form-control" placeholder="Department" name="Department" id="Department">
              </div>
             <div class="form-group">
                 <input type="text"  class="form-control" placeholder="Address Line 1"  name="AddressLine1" id="AddressLine1">
             </div>

              <div class="form-group">
                 <input type="text"  class="form-control" placeholder="Address Line 2"  name="AddressLine2" id="AddressLine2">
             </div>
              <button type="submit" class="btn btn-primary" name="submit" value="submit" onclick=""> Submit </button>
               <button type="submit" class="btn btn-primary" name="delete" value="delete" onclick=""> Delete </button>
               <button type="submit" class="btn btn-primary" name="update" value="update" onclick=""> Update </button>
               <button type="submit" class="btn btn-primary" name="view" value="view" onclick=""> View </button>
         </form>
     	</div>
     	<div class="col-md-6 Contact-info">
     	<div class="follow"> <b>Address ::</b>
         <i class="fa fa-map-marker"></i>
     	 243/3 Road Matara,srilanka</div>	

     	<div class="follow"> <b>Phone ::</b>  <i class="fa fa-phone"></i> +1 1234567890</div>	

     	<div class="follow"> <b>Email ::</b> <i class="fa fa-envelope-o"></i> sltb@gmail.com</div>	

     	<div class="follow"> <label> <b>Get Social ::</b> 
     	</label>
     	<a href="#"> <i class="fa fa-whatsapp"></i></a>
           <a href="#"> <i class="fa fa-facebook"></i></a>
            <a href="#"> <i class="fa fa-youtube-play"></i></a>
             <a href="#"> <i class="fa fa-twitter"></i></a>      
     	</div>	
     	</div>
     </div>
</div>
</section>

<!---------Footer------->

<div class="footer">
  <div class="inner-footer">
    <div class="footer-items">
      <h1> Ez Booking</h1>
      <p>
      Welcome to SLTB EXPRESS online services!
       Your online portal to reserve Sri Lanka Transport Board passenger transit services, across Sri Lanka.
      </p>
    </div>
    <div class="footer-items">
      <h2>Quick Links</h2>
      <div class="border"></div>
      <ul>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
      </ul>
    </div>

    <div class="footer-items">
      <h2>Tutorials</h2>
      <div class="border"></div>
      <ul>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
        <a href=""><li>Home</li></a>
      </ul>
    </div>

    <div class="footer-items">
      <h2>Quick Links</h2>
      <div class="border"></div>
      <ul>
      <li><i class="fa fa-map-marker" aria-hidden="true">	243/3 dharmawnsha road matara</i></li>
      <li><i class="fa fa-phone" aria-hidden="true">	0716773245</i></li>
      <li><i class="fa fa-envelope" aria-hidden="true">	sltb@gmail.com</i></li>
      </ul>
      <div class="social-media" >
        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>		
      </div>
    </div>

  </div>	
  <div class="footer-bottom">
    Copyright &copy; Ez Booking 2020, All rights reserved.
  </div>
</div>
