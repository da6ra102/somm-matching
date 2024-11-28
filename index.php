<?php

use Somm\Questionaire;

require_once "./vendor/autoload.php";

$questionaire = Questionaire::setup();

$score = 0;
$maxScore = 0;

foreach ($questionaire->getQuestions() as $question) {
      $userOneAnswer = $question->getAnswers()[0];
      $userTwoAnswer = $question->getAnswers()[1];

      $score += $question->match($userOneAnswer, $userTwoAnswer);
      $maxScore += $question->getMaxPoints();
}

$matchScore = $score / $maxScore;


echo "User and user1 match score " . $matchScore . " out of " . $maxScore . "." . PHP_EOL;
echo "Which is " . $score / $maxScore * 100 . "%" . PHP_EOL;


require_once __DIR__ . "/frontend/views/questionaire.php";