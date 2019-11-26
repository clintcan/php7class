<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 10</title>
</head>
<body>
<?php

/*

Laboratory Exercise # 10 – Functions
1. Create a set of functions that will do the following
a. Add two numbers together
b. Subtract two numbers together
c. Multiply two numbers
d. Divide two numbers
Make sure the the return will be outputed by the following format: “Add/Subtract number1 and number2 equals result”
2. A factorial is the product of all integers less than or equal to n. For example 5! = 5 x 4 x 3 x 2 x 1 = 120. Make a function that will return a factorial of a given number.

*/
$a = 1;
$b = 2;

function add(int $a, int $b) {
    return $a + $b;
}

function sub(int $a, int $b) {
    return $a - $b;
}

function mul(int $a, int $b) {
    return $a * $b;
}

function dev(int $a, int $b) {
    return $a / $b;
}

echo "Add $a and $b equals ".add($a,$b);
echo "<br><br>";
echo "Subtract $a and $b equals ".sub($a,$b);
echo "<br><br>";
echo "Multiply $a and $b equals ".mul($a,$b);
echo "<br><br>";
echo "Devide $a and $b equals ".dev($a,$b);


?>
</body>
</html>