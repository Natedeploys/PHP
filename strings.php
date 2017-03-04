<?php
//This holds our name as a string
$name = "Jonathan";
//This concatenates our name and a greeting! variables are
//expanded within double quotes! not with single quote
$string_one = "Hello $name\n";
echo $string_one;

//Quotes are nested properly, with escaping utilised, adding a new line too!
$string_two = "Learning to display \"Hello $name\" to the CLI\n";
echo $string_two;

//Combining strings
$string_three = "Hello " . $name;
echo $string_three;

//Combining strings
$string_four = "$string_three" . "we are" . "$string_two";
echo $string_four;

//boolean, values are not case sensitive True or true are good
//Follow the PHP FIG standard FIG is Framework Interop Group
//PSR2 Styling guide standards.
$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);

//PHP does type juggling as it is a weakly or loosely typed language
//Below PHP juggles the string 2 into an integer and adds like a normal int
var_dump(1 + "2");

//Comparing an int with a string
$a = 10;
$b = "10";
//Comparison operator
var_dump($a == $b); // Evaluates to true
//Identical operator, three equal signs
var_dump($a === $b); // Evaluates to false due to data types

//Comparing a string variable with a string
var_dump($string_one == "Hello $name\n"); //Evaluates to true

//If statement in PHP, similar to Javascript
if ($string_one == "Hello $name\n") {
    echo "the values match"; //If it is true then do this echo
} elseif ($string_one == "") {
    echo "$string_one is empty"; //If the string is empty do this echo
} else {
    echo "the values do not match"; //If false then do this echo
}

?>