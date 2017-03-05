<?php

/*//Create variable function
$func = "hello";

//Call the variable function
$func("Jonathan", "Morning"); //It is the same as calling
//hello("Jonathan","Morning");*/

function answer(){
    return 42;
}

function add_up($a, $b){
    return $a + $b;
}


//Call the function using a variable string
$func = "add_up";
//echo $func();

//you can even store the call on another variable
$num = $func(5, 6);
echo $num;

?>