<?php
include("session.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
#gym{
	border-style:dotted;
	border-width:5px;
	padding: 2px 2px 0 2px;
	position:absolute;
	left:500px;
	top:200px;
}
ul{
list-style-type:none;
margin:0;
padding:0;
}
li{
	margin:10px 5px 30px 10px;
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
</style>
<title>
GYM INFORMATION
</title>
</head>
<body background=".\images\251038.jpg">
<h2 id="welcome">Welcome, <br> <?php echo $login_name; ?> </h2>
<a href="home.html"><img style="margin-left:200px;" src=".\images\logoprogym.png"></a>
<div id="nav">
<ul>
<li><a id="menu" href="profile.php">Profile</a></li>
<li><a id="menu" href="personal_info.php">Personal Information</a></li>
<li><a id="menu" href="gym_info.php">Gym Information</a></li>
<li><a id="menu" href="workout.php">Workout Details</a></li>
<li><a id="menu" href="logout.php">Logout</a></li>
</ul>
</div>
<div id= gym>
<ul>
<li><a id="menu" href="choose_plan.php">Choose Plan</a></li>
<li><a id="menu" href="choose_train.php">Choose Trainers</a></li>
</ul>
</div>
</body>
</html>