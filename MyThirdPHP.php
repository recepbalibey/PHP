<?php


echo "The min()-max() functions can be used to find the lowest or highest value in a list of arguments:<br>";
echo(min(0, 150, 30, 20, -8, -200)); 
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200)); 
echo "<br><br>";


echo "The abs() function returns the absolute (positive) value of a number:<br>";
echo(abs(-6.7)); 
echo "<br><br>";

echo "The sqrt() function returns the square root of a number:<br>";
echo(sqrt(64));
echo "<br><br>";

echo "The round() function rounds a floating-point number to its nearest integer:<br>";
echo(round(7884.479));
echo "<br><br>";

echo "The rand() function generates a random number:<br>";
echo(rand());
echo "<br><br>";

$num= 5;
echo $num += 12;
echo "<br>";
echo gettype($num). "<br>";
echo "<br>";

/* The difference between single-quoted and double-quoted strings in PHP :
Single-quoted Strings:They just display what they are given, no bells and whistles, no special "powers" like being able to show variable values

Double Quotes: To include variables directly inside the string.
*/

$recipe_title = 'Meatball Spaghetti';
// Using single quotes to write something on the screen:
echo '<h1>Meatball Spaghetti</h1>';
echo '<h1>' . $recipe_title . '</h1>';
//you can put the variable directly inside the quotes:
echo "<h1>$recipe_title</h1>";
?>