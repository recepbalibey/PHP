<?php

/* 
PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
To create a constant, use the define() function.
define(name, value, case-insensitive)
name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
*/

define("PHP", "PHP : Hypertext Preprocessor<br>");
echo PHP;

define("PHP2", "A case-insensitive example <br>", true);
echo php2;

define("cars", ["Alfa Romeo<br>","Tesla<br>","Mercedes<br>"]);
echo cars[0];

//Constants are automatically global and can be used across the entire script.
function Test() {
  echo PHP;
}
Test();


/*

PHP Operators
x += y	  >    x = x + y
==	    Equal	    $x == $y
===	  Identical	    $x === $y	Returns true if $x is equal to $y, and they are of the same type
!=	  Not equal	    $x != $y
<>	  Not equal	    $x <> $y
!==	 Not identical	$x !== $y
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2

*/


// The strtolower() function returns string in lowercase letter
$str="My name is RECEP <br>";  
echo strtolower($str);  
  
// The strtoupper() function returns string in uppercase letter.

$strg="Imparo PHP. <br>";  
echo strtoupper($strg); 

// The ucfirst() function returns string converting first character into uppercase. It doesn't change the case of other characters.
$stru="mi piace l'italiano. Sto imparando l'italiano. <br>";  
echo ucfirst($stru);
//lcfirst() function returns string converting first character into lowercase. 
echo lcfirst($stru);
// ucwords() function returns string converting first character of each word into uppercase.
echo ucwords($stru); 
// strrev() function returns reversed string.
echo strrev($stru);
?>