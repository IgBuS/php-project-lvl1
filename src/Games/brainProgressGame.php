<?php

namespace biserg\braingames\brainProgressGame;

function run_progress($mode = 'task/answer')
{
    $gameData = [
        'What number is missing in the progression?',
        function () {
            $progLength = 10;
            $progressionStep = random_int(1, 50);
            $progression = range(0, $progressionStep * $progLength, $progressionStep);
            $blanckIndex = array_rand($progression);
            $correctAnswer = $progression[$blanckIndex];
            $progression[$blanckIndex] = '..';
            $task = implode(" ", $progression);
            return [$task, $correctAnswer];
        }
    ];
    return $gameData;
}
