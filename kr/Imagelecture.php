<?php

ini_set("display_errors",1);
$im = @imagecreate(800,600) or die("Cannot Create");
header("Content-type:image/jpg");

$red = hexdec('ff');
$green = hexdec('ff');
$blue = hexdec('cc');
//imagecolorallocate($im, 255, 67, 28);

imagecolorallocate($im, $red, $green, $blue);
$black = imagecolorallocate($im,0,0,0);
imageline($im,0,300,100,200,$black);
imageline($im,100,200,200,300,$black);
imageline($im,200,300,300,400,$black);
imageline($im,300,400,400,500,$black);
imageline($im,400,500,500,200,$black);
imageline($im,500,200,600,100,$black);
imageline($im,600,100,700,500,$black);
imageline($im,700,500,800,300,$black);
$blue = imagecolorallocate($im,0,255,255);
imagefill($im,1,1,$blue);

$font = 'C:\xampp\htdocs\20191127 Repository\php7class\kr\Pacifico.ttf';
$text = 'Peak period!';
imagettftext($im,20,0,600,100,$black,$font,$text);

imagejpeg($im);
//imagejpeg($im,'image.jpg',90);
imagejpeg($im,NULL,100);
//imagejpeg(file,directory,quality);
imagedestroy($im);

?>
