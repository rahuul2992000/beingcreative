<?php
session_start();
?>
<?php
$mysqli = new mysqli("localhost","root","","sign_up");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(isset($_POST["uname"], $_POST["pword"])) 
    {     

        $name = $_POST["uname"]; 
        $password = $_POST["pword"]; 
		$query ="SELECT username, password FROM users WHERE username = '".$name."' AND  password = '".$password."'";
        $result1 = $mysqli->query($query);

        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["loggedin"] = true; 
            $_SESSION["userid"] = $name; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
    }


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
		
		
		       

<div class="my-2 bg-success"></div> 
        <!-- this made a division between nav bar and slide and success here is gray color-->


    
    <div id="demo" class="carousel slide" data-ride="carousel">
 <hi class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </hi>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" alt="1" width="1100" height="500" class="center">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="2" width="1100" height="500" class="center"> 
    </div>
    <div class="carousel-item">
      <img src="pocket1.jpg" alt="4" width="1100" height="500" class="center">  
  </div>
        </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        <div class="my-4 bg-#212F3C text-warning"></div>
<!-- this made a division between carousel slide and text bg is dark and text yellow -->
        
        
        
        <h5 class="my-4 bg-#212F3C text-warning text-center">DECORS & MORE</h5>
        


<div class="card-deck">
  <div class="card ">
    <img class="card-img-top" src="dreamcatcher.jpg"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Paper Plate Dream Catchers Craft</h5>
      <p class="card-text">Paper plate dream catchers would be the next best way for human beings to collect dreams.</p>
<a href="dreamcatcher.html" class="btn btn-primary">VIEW</a>
      </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="mask.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Homemade Masks</h5>
      <p class="card-text">As states begin recommending that everyone wears face masks (in some cases fining those who do not), everyone is looking for cloth masks.Explore and make an attractive face mask.</p>
    <a href="facemasks.html" class="btn btn-primary">VIEW</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="potcrochet.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">DIY KNIT PLANTER COVER</h5>
      <p class="card-text">Keep those plants cozy! It's time to pretty up those planters! Whether you want to decorate your terracotta flower pots or disguise disposable planters before giving herbs as a gift that are insanely easy.</p>
    <a href="plantknit.html" class="btn btn-primary">VIEW</a>
  </div>
</div>
        </div>
        
        
         <div class="my-3 bg-warning"></div> 
        <!-- this made a division between card deck n more and card -->
   
                
        
<div class="card text-center text-black bg-warning mb-3">
<!-- gave the CARD yellow color and the button other color -->
  <div class="card-body">
    <h5 class="card-title">KEEP EXPLORING TO KEEP CREATING</h5>
    <p class="card-text">Explore our content to create some amazing stuff!!</p>
    <a href="explore.php"
 class="btn btn-primary text-white bg-dark mb-3">EXPLORE</a>
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






