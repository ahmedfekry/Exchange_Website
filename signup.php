<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="signup.css" rel="stylesheet">
	<!-- link href="css/2-col-portfolio.css" rel="stylesheet" -->
</head>
	<body>
	
<?php
		include 'Controllers.php';
		if( isset($_POST['sub']))
		{	
			$userController = new UserController();
			$userController ->Create();	
		}
 ?>

	
    <!--Wrap start -->
    <div class="wrap">
	    <div class="header">
	    	<ul class="wrap-top" id="nav">
	     		<li id="home"><a href="Home.php" >Home</a></li>
	     		<li id="signup"><a href="signup.php">Sign Up</a></li>
	     		<li id="login"><a href="signin.php">Login</a></li>
	  		</ul>
	  	</div>
	  	<div class="signupform">
		    <form class="sign-up"  name="signUpForm" action = "signup.php" method = "POST">
			    <h1 class="sign-up-title">Sign up</h1>
			    <input type="text" class="sign-up-input" placeholder="Your username" autofocus name = "name">
			    <input type="email" class="sign-up-input" placeholder="Your email" autofocus name="mail">
			    <input type="password" class="sign-up-input" placeholder="Your password" name = "pass">
			    <input type="submit" value="Sign me up!" class="sign-up-button" name="sub">
			</form>
    	</div>
    </div>
    <!-- end of Wrap-->
  	</body>
</html>