<?php

$currentYear = date('Y');
$year = $currentYear - 100;

//The for loop with all the conditions given
for ($year = date('Y') - 99; $year <= date('Y'); $year++) {
    echo $year ."\n";
}


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

//Set i to 0, while i is less than total elements in learn
//run the loop and then increment i by 1
for ($i = 0; $i < count($learn); $i++) {
    echo $learn[$i] ."\n"; //Print the value by using incrementing key
}



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
} while (++$year <= $currentYear);

?>