<?php

$currentYear = date('Y');
$year = $currentYear - 100;

//Create an array
$learn = array("Conditionals", "arrays", "loops");
//Add an element at the last position on the array
$learn[] = "Build Something Awesome";
//Add multiple elements to the end of array, starting from last index key
array_push($learn, "functions", "forms", "objects");
//Add multiple elements to the start of the array
array_unshift($learn, "HTML", "CSS");
//sorts the array by values alpha numerically, arsort for reverse
asort($learn);

//List assigns variables as if they were an array.
//Each returns the current key and value pair from an
//array and advance the array cursor.
//Therefore for each key value pair assign to $key and $val
while (list($key, $val) = each($learn)) {
    echo "$key => $val\n";
}


//Adding a count condition to our array while loop
$count = 0;
//for each key value pair in array and while incrementing
//count is less than 2. Here $count value compared first then incremented
//therefore first time $count will be 0
//We use keyword AND or parentheses around our first things to evaluate!
while ((list($key, $val) = each($learn)) && $count++ < 2) {
    echo "$key => $val\n";
}


//Incrementation inside
while ($year <= $currentYear) {
    echo $year ."\n";
    $year++;
}

//Incrementing inside condition
while (++$year <= $currentYear) {
    echo $year ."\n";
}

//Do while loop
do {
    echo $year . "\n";
} while (++$year <= $currentYear);*/


?>