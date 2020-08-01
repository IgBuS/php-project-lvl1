<?php

namespace Biserg\BrainGames\BrainEvenGame;

const GAME_RULE = 'Answer "yes" if the number is even, otherwise answer "no".';

function getGameData()
{
    $gameData = [
        GAME_RULE,
        function () {
            $task = random_int(1, 1000);
            $correctAnswer = ($task % 2 === 0 ? "yes" : "no");
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
