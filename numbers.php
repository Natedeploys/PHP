<?php

//Here we declare three variables
$num_one = 1;
$num_two = 2;
$num_three = 3;

//var dump prints out information about the type of a variable is holding
var_dump ( $num_one); //int
var_dump ( 1); //int
var_dump ( "1"); //string
// A simple math equation, prints out the type
var_dump ( $num_one + $num_two - $num_three); //int

//We are using floats here
$distance_home = 1.2;
$distance_work = 2.5;

//A simple math equation using floats
var_dump( $distance_home + $distance_work);

//A simple math equation using floats and whole numbers
var_dump( $distance_home + $distance_work + $num_one);

//A simple math equation using floats, whole numbers and direct float
var_dump( $distance_home + $distance_work + $num_one + .3);

//PHP automatically assigns the variable of float when needed
$a = 5;
$b = 10;

var_dump ($a * $b); //50 whole number still...
var_dump ($a / $b); //0.5 a float!

//Adding to the original variable
$a = $a + 1;
var_dump($a);

//Shortcut to adding
$a++; // same as using $a = $a + 1;
var_dump($a);

//The opposite of increment is decrement
$a--;
var_dump($a);

//you can run the increment or decrement inside the var dump
var_dump ($a); //still 6
var_dump ($a--); //shows it is still 6 then does the minus
var_dump ($a); //now 5!

//Another math equation, same as $a + 5
$a += 5;
var_dump($a);

//Make the change before and print the new value!
var_dump(--$a);

?>