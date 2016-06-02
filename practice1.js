<!DOCTYPE HTML> 
<html>
<head>
<script>
function changeimage()
{
	var image = document.getElementById("demo");
	
	image.style.font-size ="25px";
	image.style.color = "red";
	}
</script>
</head>
<body>
<p id="demo">JavaScript can change HTML content.</p>
<button type="button" onclick="changeimage()">Click Me!</button>
</body>
</html>