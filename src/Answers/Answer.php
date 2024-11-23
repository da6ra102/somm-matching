<?php

namespace Somm\Answers;

class Answer
{
      public string $answer;

      public function __construct(string $answer)
      {
            $this->answer = $answer;
      }
}