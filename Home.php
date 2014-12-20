<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="Home.css" rel="stylesheet">
	<!-- link href="css/2-col-portfolio.css" rel="stylesheet" -->
</head>
	<body>
	<?PHP

			
		session_start();
		if(isset($_SESSION['mail']) )
		{
			
			echo " <div class=\"wrap\">
			<div id=\"header\">
			<!-- Here's all it takes to make this navigation bar. -->
				<ul id=\"nav\">
					 <li id=\"home\"><a href=\"Home.php\" >Home</a></li>
					<li id=\"signup\"><a href=\"logOut.php\">Logout</a></li>
					<li id=\"login\"><a href=\"profile.php\">Profile</a></li>
				 </ul>
				<!-- done. -->
			</div>
			</div> ";
		}
		else
		{
			echo " <div class=\"wrap\">
			<div id=\"header\">
			<!-- Here's all it takes to make this navigation bar. -->
				<ul id=\"nav\">
					 <li id=\"home\"><a href=\"Home.php\" >Home</a></li>
					<li id=\"signup\"><a href=\"signup.php\">Sign Up</a></li>
					<li id=\"login\"><a href=\"signin.php\">Login</a></li>	
				 </ul>
				<!-- done. -->
			</div>
			</div> ";
		}
	?>
    <!-- -->
    <div class="wrap">
    	
	    <div class="main">
		    <nav class="nav1">
 				<ul>
 					<form method="POST">
	 					<select id="soflow-color" name="select1">
						  <option name="select1">Select Category</option>
						  <option name="select1">All</option>
						  <option name="select1">Car</option>
						  <option name="select1">Home</option>
 						  <option name="select1">Jop Offer</option>
						</select>

						<select id="soflow-color" name="select2">
						  <option name="select2">Select Place</option>
						  <option name="select2">All</option>
						  <option name="select2">Cairo</option>
						  <option name="select2">Alex</option>
						</select>
						<input type="submit" class="styled-button-8" value="Filter" style="margin-left: 35%" name="sub" />
					</form>
   				    <!-- <li><a href="Home.php">Filter</a></li> -->
    				<!-- <li><a href="#">Filter By Place</a></li> -->
    				<li><a href="#">Contact Us</a></li>
  				</ul>
			</nav>
			<!-- Projects Row -->
	        <div class="rows">
				<h3>Welcome "User Name" </h3>
				<!-- <h2>
	                    <a href="#">  Your Ads</a>
	             -->    </h2>
				<?php

					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "SAMA";
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					// $sql="";
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					// $sql = "SELECT * FROM ad ";
					// $query =  mysqli_query($conn, $sql);				
					// if ($query->num_rows > 0) {
							
					// echo "<ul>";
					// 	while($row = $query->fetch_assoc())
					// 	{
					// 		echo " 	
					// 		<li>	
					// 			<a href=\"#\"><img src=\"pic.jpg\" class=\"pic1\" width=\"200px\" height=\"200px\"/></a>
					// 			<p style = \"text-align: -webkit-center;\"><a href=\"#\" title=\"read more\">".$row["title"]."</a></p>
					// 			</li>		 
					// 			";
					// 	}
					// 		echo "</ul>";
					// }

					if (isset($_POST['sub'])) {
						
						$Filter1 = strtolower($_POST['select1']);
						$Filter2 = strtolower($_POST['select2']);
						if ($Filter1 == 'all' && $Filter2 == 'all') {
							echo $Filter1." ".$Filter2;
							$sql = "SELECT * FROM ad ";
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
						}elseif ($Filter1 == 'all' && $Filter2 != 'all') {
							echo $Filter1." 2 ".$Filter2;
							$sql1 = "SELECT * FROM ad WHERE place = '$Filter2'";
							$query1 =  mysqli_query($conn, $sql1);				
							if ($query1->num_rows > 0) {
							
							echo "<ul>";
							while($row = $query1->fetch_assoc())
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
								
						}elseif ($Filter1 != 'all' && $Filter2 == 'all') {
							echo $Filter1." 3 ".$Filter2;
							$sql = "SELECT * FROM ad WHERE category = '$Filter1'";
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
								
						}elseif ($Filter1 != 'all' && $Filter2 != 'all') {
							echo $Filter1." 4 ".$Filter2;
							$sql = "SELECT * FROM ad WHERE place = '$Filter2' and Category = $Filter1";
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
								
						}
					}
					// $query =  mysqli_query($conn, $sql);
					
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