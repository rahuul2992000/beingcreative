<?php
session_start();

?>


<!doctype html>
<html>
	<head>
		<title>BEING CREATIVE</title>
   <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
        
<link rel="stylesheet" href="internshipproj2.css">
<style>
		*
		{
			margin:0;
			padding: 0;
			font-family: 'Josefin Sans', sans-serif;
		}
		
		
		
.carousel-inner img {
    width: 60%;
    height:35%;
  }
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}		
		</style>
    </head>
    <body>
        <header>
        <h1 class="text-black text-center">BEING CREATIVE</h1>
        </header>

        <ul>
  <li class="nav-item">
    <a class="nav-link" href="index.html">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="explore.php">EXPLORE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contactus.php">CONTACT US</a>
  </li>
             
                		
 <li class='active' style='float:right;'>
	 
  <?php 
  if($_SESSION['loggedin']==true)
    { 
	  echo "<script>alert('login successful')</script>";
      echo "Welcome".$_SESSION['userid'];
      echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['loggedin']==false)
    {
	  $location="/fwdfrontendpartofinternship/index.html";
      header("Location:"."http://".$_SERVER['HTTP_HOST'].$location);
    }
  ?>

</li>     
</ul>
<br>
 <br>
        
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="contact6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">RAHUUL RANGARAJ</h5>
      <p class="card-text">CONTACT: +919987721327</p>
      <p class="card-text text-muted">rangaraj.rahuul18@siesgst.ac.in</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="contact2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">SANTHIYA UDIYAR</h5>
      <p class="card-text">CONTACT: +918104668356 </p>
      <p class="card-text text-muted">udiyar.santhiya18@siesgst.ac.in</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="contact6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">ATHARVA SURVE</h5>
      <p class="card-text">CONTACT: +919819539746</p>
      <p class="card-text text-muted">surve.atharva18@siesgst.ac.in</p>
    </div>
  </div>
</div>

        
        
         
        <div class="my-3 bg-warning"></div> 
        <!-- this made a division between card deck n more and card -->
 <br><br><br>  
                
        
<div class="card text-center text-black bg-warning mb-3">
<!-- gave the CARD yellow color and the button other color -->
  <div class="card-body">
    <h5 class="card-title">KEEP EXPLORING TO KEEP CREATING</h5>
    <p class="card-text">Explore our content to create some amazing stuff!!</p>
    <a href="explore.html" class="btn btn-primary text-white bg-dark mb-3">EXPLORE</a>
  </div>
</div>

        

        
        
        



    

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">HI</a>
  </div>
  <!-- Copyright -->

</footer>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>