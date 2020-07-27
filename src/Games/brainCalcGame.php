<?php

namespace biserg\braingames\brainCalcGame;

function run_calc()
{
    $gameData = [
        'What is the result of the expression?',
        function () {
            $actions = ['+', '-', '*'];
            $action = $actions[array_rand($actions)];
            $firstNumber = random_int(1, 100);
            $secondNumber = random_int(1, 100);
            $task = "$firstNumber" . " $action " . "$secondNumber";
            $correctAnswer = eval("return $task;");
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
