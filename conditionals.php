<?php
$a = 1;
$b = 15;

//Comparison if statement
if ($a == $b) {
    echo "Values are equal\n";
} elseif ($a < $b) {
    echo "$a is less than $b\n";
} elseif ($a > $b ){
    echo "$a is greater than $b\n";
} else {
    echo "values are not equal\n";
}

//Another comparison if statement
$score = 59.9;
if ($score >= 60) {
    echo "You completed the level\n";
} elseif ($score <= 30) {
    echo "You should practice some more before trying again\n";
} else {
    echo "please try again\n";
}

//If statement
if ($a == $b) {
    echo "Values are equal\n";
} else {
    echo "Values are not equal\n";
}

//Shorter if statement syntax
if (($a == $b) == false) {
    echo "Values are not equal\n";
}

//Negation operator used, if a is either greater or less than b
//So if we execute the code as long as they are not equal
if ($a <> $b) {
    echo "Values are not equal\n";
}

//if a is not equal to b, more simpler to read
if ($a != $b) {
    echo "Values are not equal\n";
}

//if a is not identical to b
if ($a !== $b) {
    echo "Values are not identical\n";
}

//Because its not 0, it will show true
if ($a) {
    echo "true\n"; //will show true
}

//if not true, when a = 0
if (!$a) {
    echo "false\n"; //will show false
}

//if false then print false
if ($a == false) {
    echo "false\n"; //will show false
}

//if not equal to true
if ($a != true) {
    echo "false\n"; //will show false
}

//Nested conditional statement
$num = 10;
if ($num >= 10){
    if ($num <=1000){
        echo "your number is within the range\n";
    } else {
        echo "your number is greater than 1000, not in the range\n";
    }
} else {
    echo "your number is less than 10, not within the range\n";
}

//Logical operators used to combine conditional statements
//both conditions must be true to print within range
$num = 1;
if ($num >= 10 && $num <=1000){ //Keyword AND can also be used
    echo "your number is within the range\n";
} else {
    echo "your number is not in the range\n";
}

//Logical operators used to combine conditional statements
//one of the conditions must be true to print within range
$num = "20";
if ($num == 10 || is_string($num)){ //Keyword OR can also be used
    echo "10 or string\n";
} else {
    echo "not a 10 or a string\n";
}

//Double ampersand has higher precendence than the equal
//true and false are evaluated first.
//$var1 = (true && false);
$var1 = true && false;
//The equal sign has a higher precendence that the "and" keyword
//True is assigned first before and is able to compare
//($var1 = true) and false;
$var2 = true and false;
var_dump($var1, $var2);

//PHP also includes an operator called XOR, meaning "Exclusive OR". XOR
//checks two conditions and returns TRUE if EITHER of the conditions are
//true, but not both.
if ($num == 10 XOR is_string($num)) {
    echo '10 or string, but not the string "10"';
} else {
    echo 'Either the string "10" or NOT 10 and NOT string';
}

?>