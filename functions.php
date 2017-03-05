<?php

//Traditional hello world function
function hello(){
    echo "Hello, World!\n";
}

//Call the function to use it
hello();

//Set our current user
$current_user = "Jonathan";

function is_jonathan(){
    //We have a variable outside of the function scope
    //That we would like to use inside the function
    global $current_user;
    //Check if the current user is jonathan
    if($current_user == "Jonathan"){
        echo "It is Jonathan";
    } else {
        echo "It is not Jonathan";
    }
}

//Call the function to use it
is_jonathan();

//function with arguements passed through
function hellotwo($name){
    echo "\nHello, $name\n";
}

//call hellowtwo
hellotwo("Jonathan");

//Pass in multiple values passed using an array
function hey($arr){
    //Check if it is an array
    if(is_array($arr)) {
        foreach($arr as $name) {
            echo "Hey, $name\n";
        }
    }else{
        echo "Hey, friends";
    }
}

//create our array
$names = array(
    "Jonathan",
    "Bob",
    "Bill",
    );

//call the function pass in the array
hey($names);

//function with a default arguments
function hellothree($name = "Jonathan", $time="Morning"){
    echo "\nHello, $name. It is $time.\n";
}

//call hellowthree, if nothing passed default used
hellothree("Bob");

//function with a default arguments, manage them if passed
function hellofour($name = "Jonathan", $time=Null){
    if($time) {
        echo "\nHello, $name. Good $time.\n";
    }else{
        echo "\nHello, $name.\n";
    }

}

//call hellowfour, if nothing passed default used
hellofour("Bob", "Afternoon");

//Another function, title is optional
function get_info($name, $title = Null){
    if($title){
        echo "$name has arrived, they are with us a $title.";
    } else {
        echo "$name has arrived. welcome!";
    }
}

get_info("Mike", "Frog");

?>