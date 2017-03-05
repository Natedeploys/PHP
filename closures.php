<?php

//Closures are anonymous functions, functions with no names
//capable of accessing variables outside of their function scope

//Set a variable outside of greet scope
$name = "Jonathan";

//Greet will contain whatever function produces
//Tell the function to use the outside variable $name
//you cant pass it in as an argument and we dont want global
$greet = function() use ($name) {
    echo "Hello there, $name.";
}; //Close it as a statement

$greet();

?>