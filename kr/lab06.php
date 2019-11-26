<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 6</title>
</head>
<body>
<?php

/*

Laboratory Exercise #6 – Showing what is inside the variables
1. The functions print_r and var_dump show the kind and the value of a specified variable. Try looking for these variables at php.net
2. For this exercise try using these functions to output exactly what happens below:
string(5) "Teddy"
Teddy
int(45)
NULL

*/
$x = Teddy;
echo var_dump($x)."<br>";
echo $x."<br>";

$y = 45;
echo var_dump($y)."<br>";

$z = NULL;
echo var_dump($z)."<br>";

?>
</body>
</html>