<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	session_start();

	$msg="<h3 style=\"text-align:center\">Successfully Logged-In</h3>";
	$fail="<h3 style=\"text-align:center\">Sorry! Something is wrong<br>Check the Details Again</h3>";

	if($_REQUEST["text"] == $_SESSION["security"])
		{
			echo $msg;
		}
	else
		{
			echo $fail;
		}
	?>
	
</body>
</html>
	

