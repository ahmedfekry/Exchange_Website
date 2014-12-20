<?php 
/**
* 
*/
class AdController
{
	
	function __construct($argument)
	{
		# code...
	}

	public function Create($title, $name, $description, $note, $phone, $place, $category, $subcategory, $userID)
	{
		# code...
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "SAMA";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			 
			$sql = "INSERT INTO ad (title,name,description,note,phoneNumber,place,category,subcategory,user)
					VALUES ('$title','$name', '$description','$note','$phone','$place','$category','$subcategory','$userID')";
			$result = mysqli_query($conn, $sql);

			$affected = $conn -> affected_rows;
			if ($affected == 1) {
				echo "Ad created successfully";
				header ("Location: profile.php");
				exit();
			}
			else{
				echo "result ".mysql_error();
				
			}
		
	}

	public function Destroy($ad_id)
	{
		# code...
	}

	public function GetAdInfo($ad_id)
	{
		# code...
	}
	public function GetAd($ad_id)
	{
		# code...
	}

}

/**
* 
*/
class AdListController
{
	
	function __construct($argument)
	{
		# code...
	}

	public function Create($AdList)
	{
		# code...
	}

	public function Destroy($ad_list_id)
	{
		# code...
	}

	public function Rename($ad_list_id,$string)
	{
		# code...
	}

	public function ViewList($user_id)
	{
		# code...
	}

	public function AddToTheList($ad_list_id,$Ad)
	{
		# code...
	}
}

/**
* 
*/
class UserController
{
		
	function __construct($argument)
	{
		# code...
	}

	public function Create()
	{
		# code...
		// no need to send user id as a parameter we read it from session
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "SAMA";

			$userMail = $_POST['mail'];
			$userPassword = $_POST['pass'];;
			$Name = $_POST['name'];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				
				die("Connection failed: " . mysqli_connect_error());
			}

			$sqlCommand = "SELECT password FROM user WHERE email = '$userMail'";
			$result = mysqli_query($conn, $sqlCommand);
		
			if (mysqli_num_rows($result) > 0) {
				   echo "This email already has account"."<br>";
				
			} 
			else {

					$sqlInsert = "INSERT INTO user ( name, email, password)
					VALUES ('$Name' , '$userMail', '$userPassword')";
					$result = mysqli_query($conn, $sqlInsert);
					//get user ID
					
					$sqlCommand = "SELECT id  FROM user WHERE email = '$userMail'";
					$result = mysqli_query($conn, $sqlCommand);
					$row = mysqli_fetch_assoc($result);
					$userID = $row["id"];
				
				
					// make user logged in and go to profile page		
					
					session_start();
					$_SESSION["mail"] = $userMail;
					$_SESSION["id"] = $userID;
					
					// $_SESSION["password"] =
					
					header ("Location: profile.php");
					exit();
					
			}

			mysqli_close($conn);
	}

	public function Destroy()
	{
		# code...
	}

	public function GetPersonalInfo($ad_id)
	{
		# code...
	}

	public function LogIn()
	{
		# code...
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "SAMA";

			$userMail = $_POST['mail'];
			$userPassword = $_POST['pass'];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				
				die("Connection failed: " . mysqli_connect_error());
			}

			$sqlCommand = "SELECT password, id FROM user WHERE email = '$userMail' and password = '$userPassword'";
			$result = mysqli_query($conn, $sqlCommand);

			if (mysqli_num_rows($result) > 0) {
				// logged in and go to profile   
				// echo "Done"."<br>";
				$row = mysqli_fetch_assoc($result);
				$userID = $row["id"];
				
				session_start();
				$_SESSION["mail"] = $userMail;
				$_SESSION["id"] = $userID;
				
				// $_SESSION["password"] =
					echo "Done"."<br>";
				
				header ("Location: profile.php");
				exit();
			} 
			else {	
					echo "Wrong email or password"."<br>";
					// make user logged in and go to profile page		
			}

			mysqli_close($conn);
	}

	public function LogOut()
	{
		# code...
		session_start();
		session_unset(); 
		// destroy the session
		session_destroy();
		
		if(!isset($_SESSION['mail']) ) {

			 header ("Location: Home.php");
			 exit();
		}
		}
	}
 ?>