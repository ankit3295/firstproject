<?php
	include("selected_train.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	color:red;
}
#welcome{
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
#nav{
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
	margin:10px 5px 30px 10px;
}
h2{
	color:white;
	font:20px;
	margin:100px 0 0 500px;
}
</style>
<title>
Trainer Selected
</title>
</head>
<body background=".\images\251038.jpg">
<h2 id="welcome">Welcome, <br> <?php echo $login_name; ?> </h2>
<a href="home.html"><img style="margin-left:200px;" src=".\images\Logo-Progym.jpg"></a>
<div id="nav">
<ul>
<li><a id="menu" href="personal_info.php">Personal Information</a></li>
<li><a id="menu" href="gym_info.php">Gym Information</a></li>
<li><a id="menu" href="workout.php">Workout Details</a></li>
<li><a id="menu" href="logout.php">Logout</a></li>
</ul>
</div>
<br><h2>SUCCESSFULLY UPDATED</h2>
</body>
</html>