<?php

namespace Php\Project\Lvl1\brainGcdGame;

function run_gcd()
{
    $firstNumber = random_int(1, 100);
    $secondNumber = random_int(1, 100);
    $task = "$firstNumber" . " " . "$secondNumber";
    $correctAnswer = gmp_gcd($firstNumber, $secondNumber);
    return [$task, $correctAnswer];
}
