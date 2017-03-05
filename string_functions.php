<?php

$phrase = "We only hit what we aim for";

//Applying a function from the documentation
//returns int of length of string
$len = strlen($phrase);
echo $len;
echo "\n";
//substr returns part of a string
echo substr($phrase, 0, 5);
echo "\n";
//strpos find the position of the first occurrence
//of a substring inside a string
//returns false if a value not found
echo strpos($phrase, "hit"); //returns 8, as W is 0

?>