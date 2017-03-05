<?php

//Associate array
$names = array(
    "John" => "Frog",
    "Chris" => "Teacher",
    "Dave" => "Assistant",
    );

//array_keys() returns the keys, numeric and string, from the array.
var_dump(array_keys($names));

echo "\n";

//For each of the values in the associative array
//return each of the key values as $name while iterating
foreach (array_keys($names) as $name){
    echo "Hello, $name\n";
}

echo "\n";

//Array walk sends into this function both a value and a key
//from an array! in this example $names.
function print_info($value, $key){
    echo "$key is a $value.\n";
}

//Applies a user-defined function to each element of the array
array_walk($names, "print_info");

?>