<?php
//Create an array
$learn = array("Conditionals", "arrays", "loops");
//Describe the array
var_dump($learn);
//Print what is at index 1
echo "$learn[1]";
//Tell PHP how to format our array so it can print it
echo implode("\n", $learn);
//Add an element at the last position on the array
$learn[] = "Build Something Awesome";
//Check the array once more
var_dump($learn);
//Add multiple elements to the end of array, starting from last index key
array_push($learn, "functions", "forms", "objects");
//Check the array once more
var_dump($learn);
//Add multiple elements to the start of the array
array_unshift($learn, "HTML", "CSS");
//Check the array once more
var_dump($learn);
//removes an element from the start of an array and returns it
echo "you removed " . array_shift($learn) . "\n";
//removes an element from the end of an array and returns it
echo "you removed " . array_pop($learn) . "\n";
//removes one element or more inside the array by specifying the positions
unset($learn[1], $learn[2]);
var_dump($learn);
//refresh the array keys in our array so that they are ordered
$learn = array_values($learn);
var_dump($learn);
//update one of the element values within the array
$learn[0] = "Email";
var_dump($learn);
?>