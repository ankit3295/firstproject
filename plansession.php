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

	$user_check= $_SESSION['username'];
	$planselected=$_POST['plan'];
	
	if (isset($_POST['submit']))
		{
			if (empty($planselected)) 
			{
				echo "Field Missing";
			}
			else
			{
			
				$query = "INSERT INTO `plan` (mobile_no, plan_selected) VALUES('$user_check','$planselected')";
				$result=mysql_query($query);
			
					if($result)
					{ 
						echo "Successfully updated database";
						$_SESSION['user'] = $user_check;
						header("location: selectedplan.php ");
					}
					else
					{ 
						echo "Error: ".mysql_error($con);
					}
			}
		}
		else
		{
				echo "Error: ".mysql_error($con);
		}
?>