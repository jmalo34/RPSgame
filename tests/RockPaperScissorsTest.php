<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        //CASE 1
        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        //CASE 2
        function test_rock_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        //CASE 3
        function test_scissors_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        //CASE 4
        function test_scissors_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        //CASE 5
        function test_paper_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        //CASE 6
        function test_paper_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        //CASE 7
        function test_equalinputs()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals("Players Draw", $result);
        }



    }


 ?>
