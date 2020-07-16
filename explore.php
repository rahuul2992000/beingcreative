<?php
session_start();

?>


<!doctype html>
<html>
	<head>
		<title>EXPLORE</title>
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


body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  border: 0
}

.main {
  display: flex;
  justify-content: center;
  align-items: center;
}

.section {
  width: 50%;
  height: 100%;
}

video {
  width: 100%;
  height: 56.25%;
  margin-top: 21.875%;
}
p { 
 color: #ffffff;
 text-align: center; 
 font-size:25px;
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

<div class="my-2 bg-success"></div> 





<main class='main'>

  <section class='left section'>

    <p>Easy Way To Make Paper Basket - Paper Craft - Home Decor</p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/tjnbcmuswsA" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>

<main class='main'>

  <section class='left section'>

    <p>Face Mask Sewing Tips</p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/lwFHklUfVvU" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>


<main class='main'>

  <section class='left section'>

    <p>Plant Pot Ideas using Recycled Materials | Best out of Waste</p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/nIBm_d0o8ns" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>


<main class='main'>

  <section class='left section'>

    <p>Make a Long-Lasting Fairy Jar </p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/ddlCrOOBMLI" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>



<main class='main'>

  <section class='left section'>

    <p>Decorate Your Home With Beautiful Room Decor </p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/dqC99LuOMFU" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>




<main class='main'>

  <section class='left section'>

    <p>6 Easy, beautiful and different ideas to make water candles at home</p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/-fpgjvq-aos" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>



<main class='main'>

  <section class='left section'>

    <p>DIY Newspaper Lamp With Newspaper</p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/vzYfXlnOz-g" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>




<main class='main'>

  <section class='left section'>

    <p>DIY- Cement Pot With Gloves/Cement Craft Ideas</p>

  </section>
  <section class='right section'>

		<iframe 
			<video 
				width="560" height="315" 
				src="https://www.youtube.com/embed/Kag71T6XDvY" 
				frameborder="0" allow="accelerometer; autoplay; 
				encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</video>
		</iframe>
	
  </section>

</main>







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