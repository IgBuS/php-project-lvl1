<?php

namespace Biserg\BrainGames\BrainEvenGame;

function getGameData()
{
    $gameData = [
        'Answer "yes" if the number is even, otherwise answer "no".',
        function () {
            $task = random_int(1, 1000);
            $correctAnswer = ($task % 2 === 0 ? "yes" : "no");
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
