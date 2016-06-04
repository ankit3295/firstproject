<?php

 session_start();
 
 
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'gym');
 define('DB_USER','root'); 
 define('DB_PASSWORD','');
 $con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL:");//.mysql_error());
 $db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: ");//mysql_error());
 	
	$user = $_SESSION['user'];
	
	$sql='SELECT * FROM `plan` WHERE mobile_no = "$user" ';
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$login_mobileno = $row['mobile_no'];
	$login_train = $row['train_selected'];
	//echo "$login_train";
	
	mysql_close($con); // Closing Connection
	
?>