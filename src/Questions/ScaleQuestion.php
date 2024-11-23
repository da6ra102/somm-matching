<?php
declare(strict_types=1);

namespace Somm\Questions;

use Somm\Questions\Question;
use Somm\Answers\Answer;

class ScaleQuestion implements Question
{
      private string $question = "";
      private int $weight = 1;

      /**
       *  Summary of answers
       *  @psalm-var array<int, Answer>
       * */
      private array $answers = [];

      /**
       * Summary of __construct
       * @param string $question
       * @psalm-param array<int, Answer> $answers
       * */
      private function __construct(string $question, array $answers)
      {
            $this->question = $question;
            $this->answers = $answers;
      }

      /**
       * Summary of create
       * @param string $question
       * @psalm-param array<int, Answer> $answers
       */
      public static function create(string $question, array $answers): self
      {
            return new self($question, $answers);
      }

      public function setWeight(int $weight): self
      {
            $this->weight = $weight;
            return $this;
      }


      public function match(Answer $answerOne, Answer $answerTwo): float|int
      {
            $indexOne = array_search($answerOne, $this->answers);
            $indexTwo = array_search($answerTwo, $this->answers);

            if ($indexOne === false || $indexTwo === false) {
                  return 0;
            }

            if (count($this->answers) === 1) {
                  return $this->weight;
            }

            $distance = ((count($this->answers) - 1) - abs($indexOne - $indexTwo)) / (count($this->answers) - 1);
            return $distance * $this->weight;
      }

      public function getMaxPoints(): int
      {
            return $this->weight;
      }


      /**
       * Summary of getAnswers
       * @psalm-return array<int, Answer>
       * */
      public function getAnswers(): array
      {
            return $this->answers;
      }
}
