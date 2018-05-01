<?php
   include("dbconfig.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($db,$_POST['uname']);
      $passwd = mysqli_real_escape_string($db,$_POST['passwd']); 
      
      $sql = "SELECT u_id FROM admin WHERE uname = '$uname' and passwd = '$passwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("uname");
         $_SESSION['login_user'] = $uname;
         
         header("location: dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   
   
   error_reporting(0);
?>
<html>
   
   <head>
   
   
   

   
   
   
   
   
   
   
  
  
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="java/main.js"></script>
  <script src="java/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
   
   
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

   
      <title>Login@Parinati</title>
      
      <style type = "text/css">
	   .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: ##e3e4e5;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
	  height:65px;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #79797a !important;
  }
  .navbar-nav li a:hover {
      color: #111111 !important;
	   }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #79797a !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body>
	
	
	
	
	
	
	 <div class="container">
	
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="img/logo.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php">ADMIN</a></li>
        <li><a href="Loginuser.php">USER</a></li>
        <li><a href="#tour">HOW TO USE?</a></li>
      
  
        
      </ul>
    </div>
  </div>
</nav>
	
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/wall6.png" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Find Whats New</h3>
          <p>Lets You know what New Workshops Happpening.</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/wall2.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Make your choice</h3>
          <p>Choose whether your want to go or not.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/wall1.png" alt="Los Angeles" width="1200" height="600">
        <div class="carousel-caption">
          <h3>Know who is going</h3>
          <p>You can know who all are attending the Workshop.</p>
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
   
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="img/avatar.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus name="uname">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="passwd">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign In</button>
				
				 
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
			
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			
			
        </div><!-- /card-container -->
		</div>
    </div><!-- /container -->
   </body>
</html>