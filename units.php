<?php
//Number in pounds that we want to convert to kilograms
$pounds = 1.40;
//Floating point value for the pound to kilogram conversion
$pounds_to_kilograms = 0.453592;
//Use the variables above to calculate pounds multiplied
$kilograms = $pounds * $pounds_to_kilograms;
//by the kilogram conversion.
echo "Our weight is: ";
echo $pounds;
//Display the pounds to kilogram conversions.
echo "Our pounds equal to kilograms: ";
echo $kilograms;
echo "kg";

//numbers in miles we want to convert to kilometers
$miles = 2.5;
//floating point value for the mile to kilometer conversion
$mile_to_kilometer = 1.60934;
//use the variables above to calculate miles multiplied by the
//kilometer conversion.
$kilometers = $miles * $mile_to_kilometer;
//display the miles to kilometers
echo "Distance: ";
echo $miles;
echo "Miles = ";
echo $kilometers;
echo "km";
?>