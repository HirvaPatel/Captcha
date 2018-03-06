<!DOCTYPE html>
<html>
	<head>
	<title>Captcha</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
	<form action="check.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr></tr>
		<tr><td></td>
			<td><img src="c.png" class="icon"></td>
			<td></td>
			<td></td>
			<td align="center"><h2 text-align="center">CAPTCHA</h2></td>
		</tr>	
	</table>
	<div>
		<input type="email" name="email" placeholder="E-mail" class="details"/>
		<br><br>	
		<input type="password" id="password" placeholder="Password" class="details"/>
		<br><br>
		<img src="image.php" class="img">
		<br><br>
		<input type="text" name="text" placeholder="Enter the text here" class="details"/>
		<br>
	</div>
	<hr><br>
	<input type="submit" name="Sign in" value="Sign in" class="button">
<?php
session_start();
$a=$_SESSION["security"];
echo $a;

	?>	
		<br><br>

	</form>
	</body>
</html>
