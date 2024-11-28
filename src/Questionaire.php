<?php

namespace Somm;

use Somm\Questions\Question;
use Somm\Answers\Answer;
use Somm\Questions\DualQuestion;
use Somm\Questions\ScaleQuestion;

class Questionaire
{
      /** @var array<int, Question> */
      private array $questions = [];

      private function __construct()
      {

      }

      public static function create(): self
      {
            return new self();
      }

      public function addQuestion(Question $question): self
      {
            $this->questions[] = $question;
            return $this;
      }

      /**
       * Summary of getQuestions
       * @psalm-return array<int, Question> 
       */
      public function getQuestions(): array
      {
            return $this->questions;
      }

      public static function setup(): self
      {
            $setup = new self();

            $setup->addQuestion(
                  DualQuestion::create("How do you typically form your opinions?", [new Answer("Logic and facts"), new Answer("Emotions and feelings")])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create("Which type of film enthusiast are you?", [new Answer("Author's film enthusiast"), new Answer("Mainstream blockbuster lover")])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create("How would you describe yourself?", [new Answer("Smart person"), new Answer("Dumb person")])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create(" If your life were represented by a fashion style, what would it be?", [new Answer("Classic and timeless"), new Answer("Trendy and expressive")])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create("How would you describe your ideal night?", [new Answer("Well-planned in advance"), new Answer("Spontaneous and improvised")])->setWeight(1),
            );

            $setup->addQuestion(
                  ScaleQuestion::create("I am an introverted person", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("I am a self-motivated person.", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("I am a creative person.", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("I am a stressed person.", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("I have an amazing job.", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );


            $setup->addQuestion(
                  ScaleQuestion::create("How important is spirituality to you?", [
                        new Answer("Not important"),
                        new Answer("Slightly important"),
                        new Answer("Moderately important"),
                        new Answer("Very important"),
                        new Answer("Extremely important")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("How important is humor to you?", [
                        new Answer("Not important"),
                        new Answer("Slightly important"),
                        new Answer("Moderately important"),
                        new Answer("Very important"),
                        new Answer("Extremely important")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("How often do you feel lonely?", [
                        new Answer("Never"),
                        new Answer("Rarely"),
                        new Answer("Sometimes"),
                        new Answer("Often"),
                        new Answer("Every day")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("How much do you enjoy going out with friends?", [
                        new Answer("Never"),
                        new Answer("Rarely"),
                        new Answer("Sometimes"),
                        new Answer("Often"),
                        new Answer("Almost always")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("How often do you like to workout?", [
                        new Answer("Rarely"),
                        new Answer("Sometimes"),
                        new Answer("Regularly")
                  ])
            );

            $setup->addQuestion(
                  DualQuestion::create("Where do you enjoy spending time more?", [new Answer("In nature"), new Answer("In the city")])->setWeight(1),
            );


            $setup->addQuestion(
                  ScaleQuestion::create("I enjoy politically incorrect humor", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("I enjoy discussing politics/news", [
                        new Answer("Strongly Disagree"),
                        new Answer("Disagree"),
                        new Answer("Neutral"),
                        new Answer("Agree"),
                        new Answer("Strongly Agree")
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("Your age range", [
                        new Answer("21 to 33"),
                        new Answer("34 to 45"),
                        new Answer("45 - 57"),
                        new Answer("58 to 75+"),
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("How often do you visit restaurants each month?", [
                        new Answer("1-2 times"),
                        new Answer("3-5 times"),
                        new Answer("6+ times"),
                  ])
            );

            $setup->addQuestion(
                  ScaleQuestion::create("How much do you typically spend when dining out with friends?", [
                        new Answer("$"),
                        new Answer("$$"),
                        new Answer("$$$"),
                  ])
            );

            $setup->addQuestion(
                  DualQuestion::create("What is your zodiac sign?", [
                        new Answer("Aries"),
                        new Answer("Taurus"),
                        new Answer("Gemini"),
                        new Answer("Cancer"),
                        new Answer("Leo"),
                        new Answer("Virgo"),
                        new Answer("Libra"),
                        new Answer("Scorpio"),
                        new Answer("Sagittarius"),
                        new Answer("Capricorn"),
                        new Answer("Aquarius"),
                        new Answer("Pisces"),
                        new Answer("I don't know")
                  ])->setWeight(1),
            );


            $setup->addQuestion(
                  DualQuestion::create("Are you affiliated with a religion?", [
                        new Answer("Agnostic/Atheist"),
                        new Answer("Buddhist"),
                        new Answer("Christian"),
                        new Answer("Hindu"),
                        new Answer("Jewish"),
                        new Answer("Muslim"),
                        new Answer("Other"),
                        new Answer("Prefer not to say"),
                        new Answer("Skip"),
                  ])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create("How do you define yourself?", [
                        new Answer("Woman"),
                        new Answer("Man"),
                        new Answer("Non-binary"),
                  ])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create("What is your relationship status?", [
                        new Answer("Single"),
                        new Answer("Married"),
                        new Answer("It's complicated"),
                        new Answer("In a relationship"),
                  ])->setWeight(1),
            );

            $setup->addQuestion(
                  DualQuestion::create("Do you have children?", [
                        new Answer("Yes"),
                        new Answer("No"),
                        new Answer("Prefer not to say"),
                  ])->setWeight(1),
            );

            return $setup;
      }
}