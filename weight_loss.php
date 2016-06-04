<?php
include("session.php");
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
#workout{
	border-style:dotted;
	border-width:5px;
	border-color:white;
	position:absolute;
	left:600px;
	top:300px;
	padding:5px 5px 5px 5px;
}
table{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	margin:50px 50px 50px 450px;
	width:50%;
	text-align:center;
	color:white;
	font-size:20px;
}
</style>
<title>
Workout Details
</title>
</head>
<body background=".\images\251038.jpg">
<h3 STYLE="color:white;"><marquee>DON'T CHOOSE PILLS OVER STAIRS </marquee></h3>
<h2 id="welcome">Welcome, <br> <?php echo $login_name; ?> </h2>
<a href="home.html"><img style="margin-left:200px;" src=".\images\logoprogym.png"></a>
<div id="nav">
<ul>
<li><a id="menu" href="personal_info.php">Personal Information</a></li>
<li><a id="menu" href="gym_info.php">Gym Information</a></li>
<li><a id="menu" href="workout.php">Workout Details</a></li>
<li><a id="menu" href="logout.php">Logout</a></li>
</ul>
</div>
<table border="1">
<tr>
<td>Tredmill</td>
<td>20mins</td>
</tr>
<tr>
<td>Cross Trainer</td>
<td>10mins</td>
</tr>
<tr>
<td>Cycle</td>
<td>10mins</td>
</tr>
<tr>
<td>Stairs</td>
<td>20 x 5</td>
</tr>
<tr>
<td>Sides</td>
<td>20 x 5</td>
</tr>
<tr>
<td>Abs</td>
<td>5 x 10 x 3</td>
</tr>
<tr>
<td>Twister</td>
<td>10mins</td>
</tr>
<tr>
<td>Crunches</td>
<td>20mins</td>
</tr>
<tr>
<td>Leg Raise</td>
<td>20 x 3</td>
</tr>
<td>Burpees</td>
<td>20 x 3</td>
</table>
</body>
</html>