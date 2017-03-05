<?php
$player1 = 0;
$player2 = 0;
$round = 0;

//ABS returns the absolute value, the difference
//var_dump(abs($player1 - $player2));

//Win
//player must reach a score of 11
//player must be a minimum of 2 points higher than opponent

//While the difference in player scores is less than two
//Or player1 and 2 have less than 11, continue the while loop
while(abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 < 11)) {
    //Not winner
    //Randomly increment one of the player scores each round
    $round++;
    echo "Round: $round\n";
    //Randomly add a point to one of the players
    //if random gives a minimum of 0 or a maximum of 1
    if (rand(0,1)) {
        //If its true, when random gives 1 which is true
        $player1++; //Give this player a score
    } else {
        //If its false, when random gives 0 which is false
        $player2++;
    }
    echo "Player 1 = $player1 score.\n";
    echo "Player 2 = $player2 score.\n";
}

echo "\nWinner: ";
if ($player1 > $player2){
    echo "Player 1.";
} else {
    echo "Player 2.";
}
echo " After $round rounds. Congratulations";
?>