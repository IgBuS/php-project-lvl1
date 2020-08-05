<?php

namespace Biserg\BrainGames\BrainGcdGame;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function getGcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

function getGameData()
{
    $gameData = [
        GAME_RULE,
        $generateGameRoundData = function () {
            $firstNumber = random_int(1, 100);
            $secondNumber = random_int(1, 100);
            $task = "{$firstNumber} {$secondNumber}";
            $correctAnswer = getGcd($firstNumber, $secondNumber);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
