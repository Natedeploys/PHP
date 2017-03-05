<?php

//Create a simple function with a return
function hello($name){
    //If name is Jonathan
    if($name == "Jonathan") {
        //return string exit function
        return "Hello, Jonathan\n";
    //if not Jonathan
    } else {
        //return string exit function
        return "Hello, stranger!\n";
    }
}

//Call function and store the returned string into greeting
$greeting = hello('Bob');

//print the value stored in the greeting variable
echo $greeting;

//Create a simple function with an addition returned
//Also return multiple values using data type array
function addup($a, $b){
    $arr = array(
        $a,
        $b,
        $a + $b
        );
    return $arr;
}

//Call function pass in two values
$value = addup(2, 4);

//print the values stored in the array
print_r($value);
//print the final sum
echo $value[2];

?>