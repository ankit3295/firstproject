<?php

	include("session.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	color:blue;
	
}
h2{
	position:absolute;
	left:1120px;
	top:40px;
	color:red;
}
a:hover{
	color:hotpink;
}
#menu{
	color:none;
	display:block;
	background-color:yellow;
	text-decoration:none;
}
div{
	border-style:inset;
	border-width:5px;
	border-color:black;
	float:left;
	margin-left:20px;
	margin-top:170px;
}
ul{
list-style-type:none;
margin:0;
padding:0;
}
li{
margin:10px 5px 30px 10px;}
</style>
<title>
PROFILE
</title>
</head>
<body background=".\images\cutout.jpg">
<h2>Welcome, <br> <?php echo $login_name; ?> </h2>
<div>
<ul>
<li><a id="menu" href="personal_info.php">Personal Information</a></li>
<li><a id="menu" href="gym_info.php">Gym Information</a></li>
<li><a id="menu" href="workout.php">Workout Details</a></li>
<li><a id="menu" href="logout.php">Logout</a></li>
</ul>
</div>
<a href="home.html"><img style="margin-left:200px;" src=".\images\logoprogym.png"></a>
</body>
</html>