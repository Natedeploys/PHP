<?php

//Better than multiple if statements

//set today as todays day
$today = date('l');

//Switch statement, looks at the day today and checks
switch ($today) {
    case "Monday":
        echo "Wash on Monday";
        break;
   case "Tuesday":
       echo "Iron on Tuesday";
       break;
   case "Wednesday":
       echo "Mend on Wednesday";
       break;
   case "Thursday":
       echo "Churn on Thursday";
       break;
   case "Friday":
       echo "Clean on Friday";
       break;
   case "Saturday":
       echo "Saturday is the weekend.\n"; //No break here
   case "Sunday":
       echo "Rest on the weekend"; //Prints saturday's and sunday's tasks
       break;
   default:
       echo "I don't know what day it is";
       break;
}

?>