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
table{
	border-color:white;
	border-style:dotted;
	border-width:5px;
	position:absolute;
	left:500px;
	top:200px;
	padding:25px 25px 25px 25px;
	width:50%;
	font-size:20px;
}
</style>
<title>
Trainers Details
</title>
</head>
<body background=".\images\251038.jpg">
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
<div>
<table border="1">
<tr>
<td>1. Class A Trainers</td>
<td>Rs.2500/-</td>
</tr>
<tr>
<td>2. Class B Trainers</td>
<td>Rs.1500/-</td>
</tr>
<tr>
<td>3. Class C Trainers</td>
<td>Rs.1000/-</td>
</tr>
<tr>
<td>4. Class D Trainers </td>
<td>Rs.500/-</td>
</tr>
</table>
</div>
<form method="POST" action="trainsession.php">
<p style="position:absolute; top:400px; left:650px;">
Enter the Type Of Trainer : <br><input type="number" name="trainer">
<input type="submit" name="train" value="Submit">
</form>
</body>
</html>