<?php

namespace Php\Project\Lvl1\brainEvenGame;

function run_even($mode = 'task/answer')
{
    if ($mode == 'task/answer') {
        $task = random_int(1, 1000);
        $correctAnswer = ($task % 2 === 0 ? "yes" : "no");
        return [$task, $correctAnswer];
    } elseif ($mode == 'rule') {
        return $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    }
}
