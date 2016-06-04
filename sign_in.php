<?php
 session_start();
 
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'gym');
 define('DB_USER','root'); 
 define('DB_PASSWORD','');
 $con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL:".mysql_error());
 $db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: ". mysql_error());
 if (mysqli_connect_errno($con)) 
	{ echo "Failed to connect to MySQL: ".mysqli_connect_error();} 
 else 
	{ echo 'Successfully Connected to your database…';}

	$mobile=$_POST['mobile'];
	$password=$_POST['pass'];
	
	if (isset($_POST['submit'])) {
		if (empty($mobile) || empty($password)) 
		{
			echo "Email Id or Password is invalid";
		}
		else
		{
			$query = "SELECT * FROM `pro_gym` WHERE mobile_no ='$mobile' AND password ='$password' ";

			$result = mysql_query($query);
			$row = mysql_fetch_array($result);

			if(!empty($row['mobile_no']))
				{ 
					$_SESSION['username'] = $row['mobile_no'];
					echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
					header("location:profile.php");
			}
			else
			{ 
				echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
			}

		}
	}
?>