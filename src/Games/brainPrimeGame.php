<?php

namespace Biserg\BrainGames\BrainPrimeGame;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number === 1) {
        return false;
    }
    if ($number == 2 || $number == 3) {
        return true;
    }
    for ($i = 2; $i < sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function getGameData()
{
    $gameData = [
        GAME_RULE,
        function () {
            $task = random_int(1, 101);
            $correctAnswer = isPrime($task) ? "yes" : "no";
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
