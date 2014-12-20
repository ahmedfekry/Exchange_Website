<!DOCTYPE html>
<html>
<head>
	<title>Create Ad</title>
	<link href="createAd.css" rel="stylesheet">
	<!-- link href="css/2-col-portfolio.css" rel="stylesheet" -->
</head>
	<body>
	<?php 
	session_start();
	
	if(!isset($_SESSION['mail']) ) {
		 header ("Location: Home.php");
		 exit();
	}
	else
	{
		if (isset($_POST['sub'])) 
		{
			include 'Controllers.php';
			
			$userID =  $_SESSION['id'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			$name = $_POST['name'];
			$note = $_POST['note'];
			$phone = $_POST['phone'];
			$place = strtolower($_POST['Places']);
			$category = strtolower($_POST['Categories']);
			$subcategory  = $_POST['Subcategories'];
			// $query = mysql_query("")
			
			$adController =  new AdController ();
			$adController -> Create($title, $name, $description, $note, $phone, $place, $category, $subcategory, $userID);
		} 
	}	
			


 ?>
    <!--Wrap start -->
    <div class="wrap">
	    <div class="header">
	    	<ul class="wrap-top" id="nav">
	     		<li id="home"><a href="Home.php">Home</a></li>

	  		</ul>
	  	</div>
	  	<div class="signupform">
		    <form class="sign-up" action="createAd.php" method="POST">
			    <h1 class="sign-up-title">Create Ad</h1>
			    <input type="text" name="title" class="sign-up-input" placeholder="Title" autofocus>
			    <input type="text" name="name" class="sign-up-input" placeholder="your name">
			    <textarea class="sign-up-input" name="description" id="textarea" cols="25" rows="5" placeholder="Description" maxlength="80"></textarea>
			    <textarea class="sign-up-input" name="note" id="textarea2" cols="25" rows="5" placeholder="Note" maxlength="40"></textarea>
			    <input type="text" class="sign-up-input" name="phone" placeholder="Phone number">
			    <p><select name="Places" id="categ">
			    	<option name="Places" value="Cairo">Cairo</option>
			    	<option name="Places" value="Giza">Giza</option>
			    	<option name="Places" value="Alex"  >Alex</option>
			    	
			    </select>
			    </p>
			    <p><select name="Categories" id="categ">
					<option name="Categories" value="Car">Car</option>
			    	<option name="Categories" value="Home">Home</option>
			    	<option name="Categories" value="Jop Offer">Jop Offer</option>
			    </select>
			    </p>
			    <p><select name="Subcategories" id="categ">
			    	<option name="Subcategories" value="Honda">Honda</option>
			    	<option name="Subcategories" value="Opel">Opel</option>
			    </select>
			    <br>
			    </p>

				<input type="file" class="sign-up-input" id="upload" accept="image/*">
			    <input type="submit" name= 'sub' value="Create Ad" class="sign-up-button">
			</form>
    	</div>
    </div>
    <!-- end of Wrap-->
  	</body>
</html>