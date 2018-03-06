<?php
session_start();
create_img();
exit();

function create_img()
{
	$arr = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0987654321';

	$str = substr(str_shuffle($arr), 0,4);
	
	//storing the value of code
	$_SESSION["security"]=$str;

	//creating the image
	$im = ImageCreate(150, 50);
	
	$white = ImageColorAllocate($im, 255, 255, 255); 
	$black = ImageColorAllocate($im, 0, 0, 0);

	//set the background color
	ImageFill($im, 0, 0, $white);

	$font='Nexa Light.otf';	
	
	//set the position and rotation and font of letters of code
	imagettftext($im, 30, 8, 30, 40, $black, $font, $str[0]);
	imagettftext($im, 30, 9, 50, 40, $black, $font, $str[1]);	
	imagettftext($im, 30, 8, 70, 40, $black, $font, $str[2]);
	imagettftext($im, 30, 9, 90, 40, $black, $font, $str[3]);	

	//tell the browser what type pf file is coming
	header("Content-Type: image/png");
	imagepng($im);

	ImageDestroy($im);
}
?>