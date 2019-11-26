<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Twinkle</title>
</head>
<body>
<?php

/*
Create the following variables: $x = 10 and $y = 7.
2. Write code to print out the following, while saving the temporary result in a variable named $result:
10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3

*/

$x = 10;
$y = 7;

$result = $x + $y;
echo "$x + $y = ".$result."<br>";

$result = $x - $y;
echo "$x - $y = ".$result."<br>";

$result = $x * $y;
echo "$x * $y = ".$result."<br>";

$result = $x / $y;
echo "$x / $y = ".$result."<br>";

$result = $x % $y;
echo "$x % $y = ".$result."<br>";

?>
</body>
</html>