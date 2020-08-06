<?php

namespace Biserg\BrainGames\BrainEvenGame;

const GAME_RULE = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function getGameData()
{
    $generateGameRoundData = function () {
        $task = random_int(1, 1000);
        $correctAnswer = (isEven($task) ? "yes" : "no");
        return [$task, $correctAnswer];
    };
    $gameData = [
        GAME_RULE,
        $generateGameRoundData
    ];
    return $gameData;
}
