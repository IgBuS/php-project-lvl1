<?php

namespace Php\Project\Lvl1\brainEvenGame;

use function cli\line;
use function cli\prompt;

function run_even()
{
    line('Welcome to the Brain Games!
    Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counter = 0;
    do {
        $randomNumber = random_int(1, 1000);
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer');
        $correctAnswer = ($randomNumber % 2 === 0 ? "yes" : "no");
        if ($answer == $correctAnswer) {
            line("Correct!");
            $counter++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.
            Let's try again, %s!", $name);
            $counter = 0;
        }
    } while ($counter < 3);
    line("Congratulations, %s", $name);
}
