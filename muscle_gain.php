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
#chest{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	margin:50px 0 0 250px;
	width:20%;
	text-align:center;
	color:white;
	font-size:15px;
}
#back{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	margin:10px 0 0 250px;
	width:20%;
	text-align:center;
	color:white;
	font-size:15px;
}
#biceps{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	width:25%;
	text-align:center;
	color:white;
	font-size:15px;
	position: absolute;
	left:550px;
	top:250px;
}
#triceps{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	width:25%;
	text-align:center;
	color:white;
	font-size:15px;
	position:absolute;
	left:550px;
	top:450px;
}
#shoulders{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	width:25%;
	text-align:center;
	color:white;
	font-size:15px;
	position:absolute;
	left:920px;
	top:250px;
}
#legs{
	border-style:dotted;
	border-color:white;
	border-width:5px;
	width:25%;
	text-align:center;
	color:white;
	font-size:15px;
	position:absolute;
	left:920px;
	top:480px;
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
<table id="chest" border="1">
<caption style="color:yellow;">CHEST</caption>
<tr>
<td>Push-ups</td>
<td>20 x 3</td>
</tr>
<tr>
<td>Flat Bench</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Incline Bench</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Flat Dumbells</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Decline Bench</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Butter-fly</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Over Head</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Push-ups</td>
<td>10 x 3</td>
</tr>
<tr>
</table>
<table id="back" border="1">
<caption style="color:yellow;">BACK</caption>
<tr>
<td>Pull-Ups</td>
<td>20 x 3</td>
</tr>
<tr>
<td>Forward Bench</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Back Bench</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Dead Lift</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Sitted Rowing</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Front Hand</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Side Dumbbells</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Back Crunches</td>
<td>10 x 4</td>
</tr>
<tr>
</table>
<table id="biceps" border="1">
<caption style="color:yellow;">BICEPS</caption>
<tr>
<td>Dumbbell Curls</td>
<td>20 x 3</td>
</tr>
<tr>
<td>Barbell Curls</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Concentraion Curls</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Preacher Curls</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Cable Machine Single Hand Curls</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Dumbbell Hammer Curls</td>
<td>10 x 4</td>
</tr>
</table>
</table>
<table id="triceps" border="1">
<caption style="color:yellow;">TRICEPS</caption>
<tr>
<td>Triceps Push-ups</td>
<td>20 x 3</td>
</tr>
<tr>
<td>Push Down</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Rope push Down</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Cable V-Bar PushDowns</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Single Hand Dumbbell</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Double Hand Dumbbell</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Side Kick Dumbbell</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Dips</td>
<td>10 x 4</td>
</tr>
</table>
<table id="shoulders" border="1">
<caption style="color:yellow;">SHOULDERS</caption>
<tr>
<td>Front Rod</td>
<td>20 x 3</td>
</tr>
<tr>
<td>Front Hand Disc</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Back Rod</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Side Raise Dumbbell</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Cable Machine Pull Ups</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Military Press</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Upright</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Shrugs</td>
<td>10 x 4</td>
</tr>
</table>
<table id="legs" border="1">
<caption style="color:yellow;">LEGS</caption>
<tr>
<td>Free Squats</td>
<td>20 x 3</td>
</tr>
<tr>
<td>Weighted Squats</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Leg Press</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Leg Extension</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Leg Curl</td>
<td>10 x 4</td>
</tr>
<tr>
<td>Calf Raise</td>
<td>10 x 4</td>
</tr>
<tr>
</table>
</body>
</html>