<?php

namespace Biserg\BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame($getGameData)
{
    line('Welcome to the Brain Games!');
    [$rule, $getTaskAndAnswer] = $getGameData();
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$task, $correctAnswer] = $getTaskAndAnswer();
        line("Question: %s", $task);
        $userAnswer = prompt('Your answer');
        if ($userAnswer != $correctAnswer) {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return null;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}
