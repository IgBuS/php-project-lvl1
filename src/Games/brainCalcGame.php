<?php

namespace Php\Project\Lvl1\brainCalcGame;

use Php\Project\Lvl1\config\Config;

function run_calc($mode = 'task/answer')
{
    if ($mode == 'task/answer') {
        $action = Config::$actions[array_rand(Config::$actions)];
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);
        $task = "$firstNumber" . " $action " . "$secondNumber";
        $correctAnswer = eval("return $task;");
        return [$task, $correctAnswer];
    } elseif ($mode == 'rule') {
        return $rule = 'What is the result of the expression?';
    }
}
