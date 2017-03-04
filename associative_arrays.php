<?php
//Associative Array, here we assign our own text keys
$iceCream = array('Jonathan' => 'Black Cherry',
                  'Treasure' => 'Chocolate',
                  'Joe' => 'Cookies',
                  'Bob' => 'Steak' );
//Adding a single element with a key
$iceCream["Alice"] = "Chips";
//Print a specific key value pair, array keys are case sensitive
echo $iceCream["Jonathan"] . "\n\n";
//Show us the associative array structure
var_dump($iceCream);
//Keys must be unique or they will be overwritten
$iceCream["Bob"] = "Chicken";
//Show us the associative array structure with bob overwritten
var_dump($iceCream);
//keys get changed, i.e. if a key is "1" it will get changed to int 1
//This example shows how the keys get overwritten as they are all 1
$keys = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d"
    );

//Adds the value to the next available integer even if our array has string //keys the integer will then be 0
$keys[] = "e";

var_dump($keys);
?>
