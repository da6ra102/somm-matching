<?php

namespace Somm\Questions;

use Somm\Answers\Answer;

interface Question
{
      public function getAnswers(): array;
      public function match(Answer $answerOne, Answer $answerTwo): float|int;
      public function getMaxPoints(): float|int;
}