<?php
//Store each exercise in a string varible
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';
//create a variable containing the day of the week
//'N' returns a numeric representation of the day of the week 1 (for
//Monday) through 7 (for Sunday)
$day = date('N');
var_dump($day);
//use an if statement to test the day of the week
//display the corresponding exercise string
if ($day == 1){
    echo $exercise1;
} elseif ($day == 2){
    echo $exercise2;
} elseif ($day == 3){
    echo $exercise3;
} elseif ($day == 4){
    echo $exercise4;
} elseif ($day == 5){
    echo $exercise5;
} elseif ($day == 6){
    echo $exercise6;
} elseif ($day == 7){
    echo $exercise7;
}

?>