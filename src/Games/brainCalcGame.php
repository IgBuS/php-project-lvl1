<?php

namespace Biserg\BrainGames\BrainCalcGame;

const ACTIONS = ['+', '-', '*'];

function getGameData()
{
    $gameData = [
        'What is the result of the expression?',
        function () {
            $action = ACTIONS[array_rand(ACTIONS)];
            $firstNumber = random_int(1, 100);
            $secondNumber = random_int(1, 100);
            $task = "$firstNumber" . " $action " . "$secondNumber";
            $correctAnswer = eval("return $task;");
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
