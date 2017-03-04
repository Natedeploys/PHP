<?php

$firstName = "Jonathan";
$lastName = "Prada";
$currentGrade = 9;
$finalAverage = 1;
$messageBody = "";

//if firstname or lastname not true because they are empty
if (!$firstName || !$lastName) {
    echo "Please enter a student name";
//if current grade lower than 9 or higher than 12
} elseif ($currentGrade < 9 || $currentGrade > 12 ) {
    echo "This is only for highschool students, please enter a grade between 9-12.";
//begin assigning the right messages based on score
} else {
    //if average score is bad then send back to summer school
    if ($finalAverage < .70) {
        $messageBody = "We look forward to seeing you at summer school, beginning July 1st!";
    //else search for the right message in our switch statement
    } else {
        switch ($currentGrade) {
            case 9:
                $messageBody = "Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!";
                break;
            case 10:
                $messageBody = "Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!";
                break;
            case 11:
                $messageBody = "Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!";
                break;
            case 12:
                $messageBody = "Congratulations! You’ve graduated High School! Don’t forget to come back and visit.";
                break;
            default:
                $messageBody = "Error, grade level is not between 9-12";
                break;
        }

    }
    echo "Dear $firstName $lastName\n";
    echo "$messageBody";
}

?>