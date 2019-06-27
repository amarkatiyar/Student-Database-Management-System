<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
  <script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
  <style>

  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  
  .column {
    float: left;
    width: 33.33%;
    padding: 50px;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
    color: white;
}

.containerTab {
    padding: 110px;
    color: white;
}

/* Clear floats after the columns */
.row:after {
    content: "";
   
   
}

/* Closable button inside the container tab */
.closebtn {
    float: right;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
.zoom {
    padding: 50px;
    background-color: green;
    transition: transform .2s;
    width: 200px;
    height: 200px;
    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(2); /* IE 9 */
    -webkit-transform: scale(2); /* Safari 3-8 */
    transform: scale(2); 
}
  
   .border {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
  }
  
   .jumbotron {
      background-color: #2d2d30;
      color: #fff;
      padding: 100px 50px;
      font-family: Montserrat, sans-serif;
  }
  
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
    
   
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand">Logo</a>
	  </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	 
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">LogIn</a></li>
        <li><a href="#tour">SignUp</a></li>
        <!--<li><a href="#Offer">search</a></li>
		 <li><a href="#contact">update</a></li>-->
		 	 
       <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES
          <ul class="dropdown-menu">
            <li><a href="#fc">Food Cupboard</a></li>
            <li><a href="#hk">Home && Kitchen</a></li>
            <li><a href="#sp">Summer PC</a></li> 
			<li><a href="#pb">Popular Brands</a></li> 
			<li><a href="#fr">Featured Recipes</a></li> 		
          </ul>
        </li>-->
 
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container text-center">
    <h1>Student database management system</h1>      
  </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>

    </ol>

    <!-- Wrapper for slides -->
	<br><br>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	  
        <img src="pic.jpg"  width="900" height="600">
		
        <div class="carousel-caption">
          
        </div>      
      </div>

      <div class="item">
        <img src="pic1.jpg"  width="900" height="600">
        <div class="carousel-caption">
          
        </div>      
      </div>
    
      <div class="item">
        <img src="pic2.jpg" width="900" height="600">
        <div class="carousel-caption">
         
        </div>      
      </div>
	  <div class="item">
        <img src="pic3.jpg"  width="900" height="600">
        <div class="carousel-caption">
          
        </div>      
      </div>
	  <div class="item">
        <img src="pic4.jpg"  width="900" height="600">
        <div class="carousel-caption">
          
        </div>      
      </div>
	  <div class="item">
        <img src="pic5.jpg"  width="900" height="600">
        <div class="carousel-caption">
          
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>LOG IN</h3>
  <form method="post" action="login.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
        <div class="checkbox">
          <label><input type="checkbox" name="remember">Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-default"  name="login_user">Submit</button>
      </div>
    </div>
  </form>
</div>
<div id="tour" class="bg-1"> 
  <div class="container text-center">
    <h3 class="text-center">SIGN UP</h3>
    <p class="text-center"></p>
	  <form method="post" action="index.php">
	  
	  	<?php include('errors.php'); ?>
	
      <div class="form-group">
      <label >Username:</label>
          
        <input type="text"   size="30" name="username" value="<?php echo $username; ?>">
  
      </div>
	<br>
	
	  <div class="form-group">
      <label>   Email:</label>
             
         <input type="email" size="30"  name="email" value="<?php echo $email; ?>">
 
      </div>
	<br>
	
	
     
    <div class="form-group">
      <label>Password:</label>
           
        <input type="password" size="30" name="password_1">
      
    </div>
     <br>
      <div class="form-group">
      <label>Confirm Password:</label>
         
        <input type="password" size="30"  name="password_2">
     
    </div>
	
	<br>
	
	
   
    <div class="form-group">       
      
          <button type="submit" class="btn" name="reg_user">SignUp</button>
      
    </div>
	<br>
	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
  
</div>
 

<div id="b1" class="containerTab" style="display:none;background:black">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  
</div>


<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Developed By <a href="" data-toggle="tooltip" title="Click Me">Me</a></p> 
</footer>
</body>
</html>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

