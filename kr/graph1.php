<?php

$sean = $_GET['sean']; //http://localhost/20191127%20Repository/php7class/kr/graph1.php?sean=55&kr=53&jao=56
$kr = $_GET['kr'];
$jao = $_GET['jao'];

//$sean = 30;
//$kr = 25;
//$jao = 20;



$maxvalue = "";

$sean2 = ((($sean / $maxvalue) * 480) - 550) * -1;
$kr2 = ((($kr / $maxvalue) * 480) - 550) * -1;
$jao2 = ((($jao / $maxvalue) * 480) - 550) * -1;

ini_set("display_errors",1);
$im = @imagecreate(800,600) or die("Cannot Create");
header("Content-type:image/jpg");

$red = hexdec('ff');
$green = hexdec('ff');
$blue = hexdec('cc');
//imagecolorallocate($im, 255, 67, 28);

imagecolorallocate($im, $red, $green, $blue);
$black = imagecolorallocate($im,0,0,0);

imagerectangle($im,100,$sean2,200,550,$black);
imagerectangle($im,350,$kr2,450,550,$black);
imagerectangle($im,600,$jao2,700,550,$black);

$blue = imagecolorallocate($im,0,255,255);
imagefill($im,1,1,$blue);

$font = 'C:\xampp\htdocs\20191127 Repository\php7class\kr\Pacifico.ttf';
$text1 = 'Sean';
$text2 = 'KR';
$text3 = 'Jao';

imagettftext($im,20,0,100,580,$black,$font,$text1);
imagettftext($im,20,0,350,580,$black,$font,$text2);
imagettftext($im,20,0,600,580,$black,$font,$text3);

imagejpeg($im);
//imagejpeg($im,'image.jpg',90);
imagejpeg($im,NULL,100);
//imagejpeg(file,directory,quality);
imagedestroy($im);

?>
