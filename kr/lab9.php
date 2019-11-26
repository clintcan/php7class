<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 9</title>
</head>
<body>
<?php

/*

Laboratory Exercise #9 – Arrays
An array is made by using assigning to the variable a list of elements through the array keyword:
$var = array(element1, element2, …)
A shortcut would be to use brackets:
$var = [element1, element2, …]
1. Write a script which will display the following string: The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon
2. The colors 'red', 'green' and 'white' will come from the array variable $color.
3. From the color variable, output in such a way that the output will be:
a. Red
b. Green
c. White
4. For the array: array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") , do the following:
a. Sort by value, ascending
b. Sort by key, ascending
c. Sort by value, descending
d. Sort by key, descending
In this exercise, refer to the php.net documentation under array functions
Note: for the above exercises particularly number 2 and 3, this requires the use of loops (you can use foreach, for, while loops)
5. For the following arrays:
$array1 = array(“apple”,”orange”,”peanut”)
$array2 = array("w3resource", "com");
merge the two arrays together.

*/

$var1 = ["The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"];
echo $var1[0];

echo "<br><br>";

$color = ['red','green','white'];

foreach($color as $color1) {
  echo $color1."<br>";
}

echo "<br><br>";

$array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($array);
while (list($key, $value) = each($array)) {
       echo $key .'='.$value."<br>";
}

echo "<br><br>";

ksort($array);
while (list($key, $value) = each($array)) {
       echo $key .'='.$value."<br>";
}

echo "<br><br>";

arsort($array);
while (list($key, $value) = each($array)) {
       echo $key .'='.$value."<br>";
}

echo "<br><br>";

krsort($array);
while (list($key, $value) = each($array)) {
       echo $key .'='.$value."<br>";
}

echo "<br><br>";

$array1 = array("apple","orange","peanut");
$array2 = array("w3resource", "com");
print_r(array_merge($array1,$array2));



?>
</body>
</html>