<?php

namespace biserg\braingames\brainGcdGame;

function run_gcd($mode = 'task/answer')
{
    $gameData = [
        'Find the greatest common divisor of given numbers.',
        function () {
            $firstNumber = random_int(1, 100);
            $secondNumber = random_int(1, 100);
            $task = "$firstNumber" . " " . "$secondNumber";
            $correctAnswer = gmp_gcd($firstNumber, $secondNumber);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
