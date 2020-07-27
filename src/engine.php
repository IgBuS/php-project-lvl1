<?php

namespace biserg\braingames\engine;

use function cli\line;
use function cli\prompt;

function runGame($game)
{
    $rounds = 3;

    line('Welcome to the Brain Games!');
    [$rule, $taskAnswer] = $game();
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < $rounds; $i++) {
        [$task, $correctAnswer] = $taskAnswer();
        line("Question: %s", $task);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.
            Let's try again, %s!",
                $name
            );
            return null;
        }
    }
    line("Congratulations, %s!", $name);
}
