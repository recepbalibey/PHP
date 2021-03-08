<?php
echo "In PHP, a variable starts with the $ sign, followed by the name of the variable<br><br>";
echo "PHP automatically associates a data type to the variable, depending on its value.<br><br>";

/* 
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
A variable name must start with a letter or the underscore character */

$color = "black.";
echo "My favorite color is " . $color . "<br>";

$a = 5 /* + 15 */ + 25;
echo "5+25= ".$a."<br>";


$txt1 = "Learning PHP";
$txt2 = " Engineer";
$txt3 = " ICT for internet and multimedia";
$x = 1997;  /*my_birth_year*/
$y = 2021;  /*current_time*/
$z=$y-$x;
echo $y. "-" .$x. "=" .$z. "<br>";


echo "<h2>" . $txt1 . "</h2>";
echo "I am an Electrical and Electronics" . $txt2 . "<br>"; 
echo "and also now I am a master's degree student in" .$txt3. "<br>";
echo "I am $z years old<br><br>";

$name = "Recep ";
$surname = "Balıbey";
echo "Hello. I am ",$name.$surname."<br>";

/*
PHP has three different variable scopes:
local
global
static
*/

$q = 5;
$w = 10;

function myTest() {
  global $q, $w;
  $w = $q + $w;
}

myTest();
echo $w;

echo "<br><br>";
/* Normally, when a function is completed/executed, 
 all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted.
  static keyword  */

$floatnumber = 10.365;
var_dump($floatnumber);
echo "<br><br>";

$cars = array("Volvo","Tesla","Ferrari","Mustang","<br><br>");
var_dump($cars);
echo "<br><br>";

echo strlen("Hello world!");
echo "<br><br>";
echo str_word_count("This function counts the number of words in a string.");
echo "<br><br>";
echo strrev("Reverse the string");
echo "<br><br>"; 
echo strpos("This function searches for a specific text within a string. If a match is found, the function returns the character position of the first match.", "text");
echo "<br><br>";


?>