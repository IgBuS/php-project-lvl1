<?php

namespace Php\Project\Lvl1\brainPrimeGame;

use Php\Project\Lvl1\config\Config;

function isPrime($number)
{
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function run_prime($mode = 'task/answer')
{
    if ($mode == 'task/answer') {
        $task = random_int(1, 101);
        $correctAnswer = isPrime($task) ? "yes" : "no";
        return [$task, $correctAnswer];
    } elseif ($mode == 'rule') {
        return $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    }
}
