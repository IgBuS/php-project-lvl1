<?php

namespace Php\Project\Lvl1\play;

use Php\Project\Lvl1\config\Config;

use function cli\line;
use function cli\prompt;
use function Php\Project\Lvl1\basic\sayHi;
use function Php\Project\Lvl1\basic\askQuestion;
use function Php\Project\Lvl1\basic\getAnswer;
use function Php\Project\Lvl1\basic\ruleInformAndNameRequest;
use function Php\Project\Lvl1\basic\returnRight;
use function Php\Project\Lvl1\basic\returnWrong;
use function Php\Project\Lvl1\basic\returnSuccess;

function play($game)
{
    sayHi();
    $name = ruleInformAndNameRequest($game('rule'));
    for ($i = 0; $i < Config::$rounds; $i++) {
        [$task, $correctAnswer] = $game();
        askQuestion($task);
        $answer = getAnswer();
        if ($answer == $correctAnswer) {
            returnRight();
        } else {
            returnWrong($answer, $correctAnswer, $name);
            return null;
        }
    }
    returnSuccess($name);
}
