<?php

namespace Biserg\Braingames\BrainProgressGame;

const PROGRESSION_LENGTH = 10;
const GAME_RULE = 'What number is missing in the progression?';

function getGameData()
{
    $gameData = [
        GAME_RULE,
        function () {
            $progressionStep = random_int(1, 50);
            $progression = range(0, $progressionStep * PROGRESSION_LENGTH, $progressionStep);
            $blankIndex = array_rand($progression);
            $correctAnswer = $progression[$blankIndex];
            $progression[$blankIndex] = '..';
            $task = implode(" ", $progression);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
