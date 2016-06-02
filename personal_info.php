<?php
include("session.php");
//include("plansession.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	color:blue;
	
}
#welcome{
	position:absolute;
	left:1120px;
	top:40px;
	color:red;
}
h3{
	color:yellow;
	font-size:20px;
}
#info{
	color:white;
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
#pi{
	border-style:dotted;
	border-width:5px;
	border-color:white;
	text-align:center;
	position:absolute;
	left:500px;
	top:200px;
	width:25%;
}
ul{
list-style-type:none;
margin:0;
padding:0;
}
li{
	margin:10px 5px 30px 10px;
}
</style>
<title>
PERSONAL INFORMATION
</title>
</head>
<body background=".\images\251038.jpg">
<h2 id="welcome">Welcome, <br> <?php echo $login_name; ?> </h2>
<div id="nav">
<ul>
<li><a id="menu" href="profile.php">Profile</a></li>
<li><a id="menu" href="personal_info.php">Personal Information</a></li>
<li><a id="menu" href="gym_info.php">Gym Information</a></li>
<li><a id="menu" href="workout.php">Workout Details</a></li>
<li><a id="menu" href="logout.php">Logout</a></li>
</ul>
</div>
<a href="home.html"><img style="margin-left:200px;" src=".\images\logoprogym.png"></a>
<div id="pi">
<h2 id="info">Name : </h2><h3><?php echo $login_name; ?></h3>
<h2 id="info">Email Id : </h2><h3><?php echo $login_email; ?></h3>
<h2 id="info">Mobile No. :</h2> <h3><?php echo $login_mobileno; ?></h3>
<h2 id="info">Age : </h2><h3><?php echo $login_age; ?></h3>
<!--<h2 id="info">Plan Selected:</h2><h3><?php echo $login_plan; ?></h3><br>-->
</div>
</body>
</html>