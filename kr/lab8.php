<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 8</title>
</head>
<body>
<?php

/*

Laboratory Exercise #8 – The gettype() function
1. Look up the gettype function in the php.net online manual. What does it say?
2. With the format “Value is <type>”, output the following to the screen (using appropriate line breaks):
Value is string.
Value is double.
Value is boolean.
Value is integer.
Value is NULL.
3. Make sure that the type is stored in a variable of your choosing.

*/

$x = "string";
echo "The Value is ".gettype($x)."<br>";

$x = 1.23;
echo "The Value is ".gettype($x)."<br>";

$x = TRUE;
echo "The Value is ".gettype($x)."<br>";

$x = 123;
echo "The Value is ".gettype($x)."<br>";

$x = NULL;
echo "The Value is ".gettype($x)."<br>";

?>
</body>
</html>