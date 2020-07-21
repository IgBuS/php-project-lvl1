<?php

namespace Php\Project\Lvl1\brainCalcGame;

use Php\Project\Lvl1\config\Config;

function run_calc()
{
    $action = Config::$actions[array_rand(Config::$actions)];
    $firstNumber = random_int(1, 100);
    $secondNumber = random_int(1, 100);
    $task = "$firstNumber" . " $action " . "$secondNumber";
    $correctAnswer = eval("return $task;");
    return [$task, $correctAnswer];
}
