<?php

namespace Biserg\BrainGames\BrainPrimeGame;

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

function getGameData()
{
    $gameData = [
        'Answer "yes" if given number is prime. Otherwise answer "no".',
        function () {
            $task = random_int(1, 101);
            $correctAnswer = isPrime($task) ? "yes" : "no";
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
