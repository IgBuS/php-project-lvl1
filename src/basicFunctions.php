<?php

namespace Php\Project\Lvl1\basic;

use function cli\line;
use function cli\prompt;

function sayHi()
{
    line('Welcome to the Brain Games!');
}
function ruleInformAndNameRequest($rule)
{
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function askQuestion($question)
{
    line("Question: %s", $question);
}

function getAnswer()
{
    return $answer = prompt('Your answer');
}

function returnRight()
{
    line("Correct!");
}

function returnWrong($answer, $correctAnswer, $name)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.
    Let's try again, %s!", $name);
}

function returnSuccess($name)
{
    line("Congratulations, %s!", $name);
}
