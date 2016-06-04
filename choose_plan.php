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
#pplan{
	font:20px;
	position:absolute;
	left:50px;
	top:50px;
}
#plan{
	text-decoration:none;
	
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
Plan Detais
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
<li><a id="menu" href="selectedplan.php">Plan Selected</a></li>
<li><a id="menu" href="logout.php">Logout</a></li>
</ul>
</div>
<div>
<table border="1">
<tr>
<td>1. 1 Month</td>
<td>Rs.2500/-</td>
</tr>
<tr>
<td>2. 3 Months</td>
<td>Rs.6500/-</td>
</tr>
<tr>
<td>3. 6 Months</td>
<td>Rs.13000/-</td>
</tr>
<tr>
<td>4. Annual Package </td>
<td>Rs.22,000/-</td>
</tr>
</table>
</div>
<form method="POST" action="plansession.php">
<p style="position:absolute; top:400px; left:650px;">
Enter the plan : <br><input type="text" name="plan">
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
