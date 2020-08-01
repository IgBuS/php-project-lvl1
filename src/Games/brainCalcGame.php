<?php

namespace Biserg\BrainGames\BrainCalcGame;

const ACTIONS = ['+', '-', '*'];
const GAME_RULE = 'What is the result of the expression?';

function count($action, $firstNumber, $secondNumber)
{
    switch ($action) {
        case '+':
            return $firstNumber + $secondNumber;
        break;
        case '-':
            return $firstNumber - $secondNumber;
        break;
        case '*':
            return $firstNumber * $secondNumber;
        break;
    }
}

function getGameData()
{
    $gameData = [
        GAME_RULE,
        function () {
            $action = ACTIONS[array_rand(ACTIONS)];
            $firstNumber = random_int(1, 100);
            $secondNumber = random_int(1, 100);
            $task = "{$firstNumber} {$action} {$secondNumber}";
            $correctAnswer = count($action, $firstNumber, $secondNumber);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
