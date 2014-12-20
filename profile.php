<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link href="profile.css" rel="stylesheet">
	<!-- link href="css/2-col-portfolio.css" rel="stylesheet" -->
</head>
	<body>
    <!-- -->
    <div class="wrap">
    	<div id="header">
    		<!-- Here's all it takes to make this navigation bar. -->
   			<ul id="nav">
     			 <li id="home"><a href="Home.php">Home</a></li>
     			 <li id="signup"><a href="profile.php">Profile</a></li>
     			 <li id="login"><a href="logOut.php">Logout</a></li>
  			 </ul>
            <!-- done. -->
    	</div>
	    <div class="main">
		    <nav class="nav1">
 				<ul>
    				<li><a href="#">View My Ad</a></li>
   				    <li><a href="createAd.php">Create Ad</a></li>
    				<li><a href="#">Favorite List</a></li>
    				<li><a href="#">Setting</a></li>
    				<li><a href="#">Contact Us</a></li>
  				</ul>
			</nav>
			<!-- Projects Row -->
	        <div class="rows">
				<h3>Welcome "User Name" </h3>
				<h2>
	                    <a href="#">  Your Ads</a>
	                </h2>
				<?php

					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "SAMA";
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					session_start();
					$userid = $_SESSION['id'];	// $sqlCommand = "SELECT password, id FROM user WHERE email = '$userMail' and password = '$userPassword'";
					$sql = "SELECT * FROM ad WHERE user = '$userid'";
					$query =  mysqli_query($conn, $sql);
					if ($query->num_rows > 0) {
					
					echo "<ul>";
					while($row = $query->fetch_assoc())
					{
						echo " 	
							<li>	
								<a href=\"#\"><img src=\"pic.jpg\" class=\"pic1\" width=\"200px\" height=\"200px\"/></a>
							    <p style = \"text-align: -webkit-center;\"><a href=\"#\" title=\"read more\">".$row["title"]."</a></p>
							</li>
							 
						 ";
					}
					echo "</ul>";
					}
					
				?>
  				<pre><a href="#"><span class="chevron2 left"></span></a>             <a href="#"><span class="chevron2 right"></span></a></pre>
			</div>
    	</div>
    	<div class="footer">
    	</div>
    </div>
    <!-- -->
  	</body>
</html>