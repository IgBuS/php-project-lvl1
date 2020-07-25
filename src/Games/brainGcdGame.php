<?php

namespace Php\Project\Lvl1\brainGcdGame;

function run_gcd($mode = 'task/answer')
{
    if ($mode == 'task/answer') {
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);
        $task = "$firstNumber" . " " . "$secondNumber";
        $correctAnswer = gmp_gcd($firstNumber, $secondNumber);
        return [$task, $correctAnswer];
    } elseif ($mode == 'rule') {
        return $rule = 'Find the greatest common divisor of given numbers.';
    }
}
