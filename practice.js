<!DOCTYPE HTML> 
<html>
<head>
<body>
<p id="demo">JavaScript can change HTML content.</p>

<img id="change" onclick="changeimage()" src=".\images\bulboff.jpg">
<script>
function changeimage()
{
	var image = document.getElementById("demo");
	
	image.style.font-size ="25px";
	image.style.color = "red";
	}
</script>
<button type="button" onclick="myFunction()">Click Me!</button>
</body>
</html>