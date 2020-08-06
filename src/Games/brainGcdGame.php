<?php

namespace Biserg\BrainGames\BrainGcdGame;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function getGcd(int $a, int $b): int
{
    if ($b !== 0) {
        return getGcd($b, $a % $b);
    }

    return $a;
}

function getGameData()
{
    $generateGameRoundData = function () {
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);
        $task = "{$firstNumber} {$secondNumber}";
        $correctAnswer = getGcd($firstNumber, $secondNumber);
        return [$task, $correctAnswer];
    };
    $gameData = [
        GAME_RULE,
        $generateGameRoundData
    ];
    return $gameData;
}
