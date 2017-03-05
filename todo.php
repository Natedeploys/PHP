<?php

//Create an associative array
$task1 = array (
    "title" => "laundry",
    "priority" => 2,
    "due" => "",
    "complete" => true,
    );

//Create another associative array
$task2 = array (
    "title" => "clean fridge",
    "priority" => 3,
    "due" => "08/30/2016",
    "complete" => false,
    );

//Create a multi-dimensional array containing associative arrays
$listone = array($task1, $task2);
//show the structure of the multi-dimensional array
var_dump($listone);
//print task1, then print task1's key value pair on title
echo $listone[0]['title'];

//Create an associative array and add it to a listtwo array straight away!
$listtwo[] = [
    "title" => "mop",
    "priority" => 2,
    "due" => "",
    "complete" => true,
    ];

//Create another associative array and add it to listtwo array
$listtwo[] = [
    "title" => "vacuum",
    "priority" => 3,
    "due" => "08/30/2016",
    "complete" => false,
    ];

//show the structure of the multi-dimensional array
var_dump($listtwo);
//print task1, then print task1's key value pair on title
echo $listtwo[0]['title'];

?>