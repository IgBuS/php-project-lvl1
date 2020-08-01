<?php

namespace Biserg\BrainGames\BrainGcdGame;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function getGcd($a, $b)
{
    if ($a == 0 || $b == 0) {
        return abs(max(abs($a), abs($b)));
    }
    $r = $a % $b;
    return ($r != 0) ? getGcd($b, $r) : abs($b);
}

function getGameData()
{
    $gameData = [
        GAME_RULE,
        function () {
            $firstNumber = random_int(1, 100);
            $secondNumber = random_int(1, 100);
            $task = "{$firstNumber} {$secondNumber}";
            $correctAnswer = getGcd($firstNumber, $secondNumber);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
