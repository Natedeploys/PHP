<?php
include 'list.php';

//Set the task status
$status = 'all';
//Ability to sort by a field
$field = 'title';
//Used within the switch statement
$action = 'week';

$order = array();
//If the status equals all
if ($status == 'all') {
    //Adds all the list keys to the order array
    $order = array_keys($list);
  //we loop through our list array
} else {
  //Add only the keys with proper status
    foreach ($list as $key => $item) {
        if ($item['complete'] == $status) {
            $order[] = $key;
        }
    }
}

//Take in action and check
switch ($action) {
    //if action is equal to sort
    case 'sort':
        //If our field is set, sort by that
        if ($field) {
            //New array for sorting
            $sort = array();
            //For each element in the order array
            foreach ($order as $id) {
                //do the sorting for each element by the field type
                //at the moment it is title
                $sort[$id] = $list[$id][$field];
            }
            //sort the array by alphanumerical value
            asort($sort);
            //Adds all the list keys to the order array
            $order = array_keys($sort);
        }
        break;
    //if action is equal to week
    case 'week':
        //For each element in the order array
        foreach ($order as $key => $value) {
            //if the due date is greater than next week
            //or if the due data is not set
            if (strtotime($list[$value]['due']) > strtotime("+1 week") || !$list[$value]['due']) {
                //unset the current key in order array
                unset($order[$key]);
            }
        }
        break;
}
//var_dump($sort);
//var_dump($list);

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach ($order as $id) {
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . "</td>\n";
    echo '<td>' . $list[$id]['priority'] . "</td>\n";
    echo '<td>' . $list[$id]['due'] . "</td>\n";
    echo '<td>';
    if ($list[$id]['complete']) {
        echo 'Yes';
    } else {
        echo 'No';
    }
    echo "</td>\n";
    echo '</tr>';
}
echo '</table>';
//var_dump($list);
//echo $list[0]['title'];
?>