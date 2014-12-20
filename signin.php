<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="signin.css" rel="stylesheet">
	<!-- -->
</head>
	<body>
<?php
		//include("Controllers.php");
		include 'Controllers.php';
		if( isset($_POST['sub']))
		{	
			$userController = new UserController();
			$userController ->LogIn();	
		}
	
 ?>

    <!--Wrap start -->
    <div class="wrap">
    	<!--header start -->
	    <div class="header">
	    	<ul class="wrap-top" id="nav">
	     		<li id="home"><a href="Home.php" >Home</a></li>
	     		<li id="signup"><a href="signup.php">Sign Up</a></li>
	     		<li id="login"><a href="signin.php">Login</a></li>
	  		</ul>
	  	</div>

	  	<div class="signupform">
		    <form class="sign-up" action = "signin.php" name = "logInForm" method = "POST">
			    <h1 class="sign-up-title">Login</h1>
			    <input type="email" class="sign-up-input" placeholder="Your email" autofocus name = "mail">
			    <input type="password" class="sign-up-input" placeholder="Your password" name="pass">
			    <br>
			    <br>
			    <input type="submit" value="login" class="sign-up-button" name = "sub" >
			</form>
    	</div>
    </div>
    <!-- end of Wrap-->
  	</body>
</html>