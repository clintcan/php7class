<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 11</title>
</head>
<body>
<?php

/*

Laboratory Exercise # 11 – Objects and Classes

1. Write a simple PHP class which displays the following string. 'MyClass class has initialized !'. Hint: use the constructor method to output the string.

2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.

3. From the functions you created in Exercise 10, create a class named Mathematics with the following functions as your class methods. And make an output example of each method by invoking the class.

4. Make a class named Mathematics2 which extends the Mathematics

*/

class MyClass {

    public $name = '';

    public function __construct( $name ) {
        $this->name = $name;
    }

}

$person = new MyClass( "String" );
echo $person->name;

#--------------------------
echo "<br><br>";

$test = new MyClass( "String" );


class IntroMessage {

    public $name = 'Test';

    public function __construct( $name ) {
        $this->value = $name;
    }

}

echo $test->name;

//echo $test->value;

echo "<br><br>";
	







?>
</body>
</html>