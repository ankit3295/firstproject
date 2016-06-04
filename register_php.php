<?php
 
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
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$age=$_POST['age'];
	$password=$_POST['pass'];
	$cpassword=$_POST['cpass'];
	
	$error=''; // Variable To Store Error Message
	if (isset($_POST['register'])) {
		
		if (empty($email) || empty($password) || empty($mobile)) 
		{
			echo "Field Missing";
		}
		if(strlen($mobile)!=10)
		{
			echo "Please Enter a valid mobile number";
		}
		else{
				if($password!=$cpassword)
				{
					echo "Password do not match";
				}
				else
				{
					$query = "INSERT INTO `pro_gym` (name, email_id, mobile_no, password, age) VALUES('$name','$email','$mobile','$password','$age')";

					$result = mysql_query($query);

					if($result)
					{ 
						echo "Successfully updated database";
						header("location: successful.html ");
					}
					else
					{ 
						echo "Error: ".mysql_error($con);
					}
			
				}
			}
	}
?>
