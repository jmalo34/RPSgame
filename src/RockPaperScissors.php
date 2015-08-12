<?php
    class RockPaperScissors
    {

        function playRockPaperScissors($first_input, $second_input)
        {
        //CASE 1
        if ($first_input == "rock" && $second_input == "scissors") {
            return "Player 1";
        }
        //CASE 2
        elseif ($first_input == "rock" && $second_input == "paper") {
            return "Player 2";
        }
        //CASE 3
        elseif ($first_input == "scissors" && $second_input == "paper") {
            return "Player 1";
        }
        //CASE 4
        elseif ($first_input == "scissors" && $second_input == "rock") {
            return "Player 2";
        }
        //CASE 5
        elseif ($first_input == "paper" && $second_input == "rock") {
            return "Player 1";
        }
        //CASE 6
        elseif ($first_input == "paper" && $second_input == "scissors") {
            return "Player 2";
        }





        }
    }
 ?>
