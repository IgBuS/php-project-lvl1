<?php

namespace Biserg\BrainGames\BrainCalcGame;

const GAME_RULE = 'What is the result of the expression?';
const MATH_OPERATORS = ['+', '-', '*'];

function calculate($action, $firstNumber, $secondNumber)
{
    switch ($action) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
        default:
            break;
    }
}

function getGameData()
{
    $generateGameRoundData = function () {
        $action = MATH_OPERATORS[array_rand(MATH_OPERATORS)];
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);
        $task = "{$firstNumber} {$action} {$secondNumber}";
        $correctAnswer = calculate($action, $firstNumber, $secondNumber);
        return [$task, $correctAnswer];
    };
    $gameData = [
        GAME_RULE,
        $generateGameRoundData
    ];
    return $gameData;
}
