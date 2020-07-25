<?php

namespace Php\Project\Lvl1\brainProgressGame;

use Php\Project\Lvl1\config\Config;

function run_progress($mode = 'task/answer')
{
    if ($mode == 'task/answer') {
        $progressionStep = random_int(1, 50);
        $progression = range(0, $progressionStep * Config::$progLength, $progressionStep);
        $blanckIndex = array_rand($progression);
        $correctAnswer = $progression[$blanckIndex];
        $progression[$blanckIndex] = '..';
        $task = implode(" ", $progression);
        return [$task, $correctAnswer];
    } elseif ($mode == 'rule') {
        return $rule = 'What number is missing in the progression?';
    }
}
