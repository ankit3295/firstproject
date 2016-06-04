<?php

 session_start();
 
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'gym');
 define('DB_USER','root'); 
 define('DB_PASSWORD','');
 $con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL:".mysql_error());
 $db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: ". mysql_error());
 	
	$user_check= $_SESSION['username'];
	
	$sql="SELECT * FROM `pro_gym` WHERE mobile_no='$user_check' ";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	/*$sql1="SELECT * FROM `plan` WHERE mobile_no='$user_check' ";
	$result1=mysql_query($sql);
	$row1 = mysql_fetch_array($result1);*/
	
	$login_name = $row['name'];
	$login_mobileno = $row['mobile_no'];
	$login_age = $row['age'];
	$login_email = $row['email_id'];
	//$login_plan = $_SESSION['userplan'];
	
	if(!isset($login_mobileno)){
	mysql_close($con); // Closing Connection
	header("location:home.html"); // Redirecting To Home Page
}
?>