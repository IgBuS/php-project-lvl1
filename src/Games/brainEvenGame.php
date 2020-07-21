<?php

namespace Php\Project\Lvl1\brainEvenGame;

function run_even()
{
    $task = random_int(1, 1000);
    $correctAnswer = ($task % 2 === 0 ? "yes" : "no");
    return [$task, $correctAnswer];
}
