<?php

namespace Biserg\Braingames\BrainProgressGame;

const PROGRESSION_LENGTH = 10;

function getGameData()
{
    $gameData = [
        'What number is missing in the progression?',
        function () {
            $progressionStep = random_int(1, 50);
            $progression = range(0, $progressionStep * PROGRESSION_LENGTH, $progressionStep);
            $blanckIndex = array_rand($progression);
            $correctAnswer = $progression[$blanckIndex];
            $progression[$blanckIndex] = '..';
            $task = implode(" ", $progression);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
