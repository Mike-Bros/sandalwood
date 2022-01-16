<?php

namespace App\LearningClasses\TestingJargon;

class Quiz {

    protected array $questions;
    protected int $currentQuestion;

    public function __construct()
    {
        $this->currentQuestion = 0;
    }

    public function AddQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

    public function questions(): array
    {
        return $this->questions;
    }

    public function initQuestion()
    {
        return $this->questions[0];
    }

    public function currentQuestion()
    {
        return $this->currentQuestion + 1;
    }

    public function nextQuestion()
    {
        $this->currentQuestion += 1;
        if ($this->currentQuestion == 1)
        {
            return $this->questions[0];
        } elseif ($this->currentQuestion > count($this->questions)-1)
        {
            return false;
        } else
        {
            return $this->questions[$this->currentQuestion];
        }
    }

    public function resetQuiz()
    {
        $this->currentQuestion = 0;
    }

    public function grade()
    {
        //all questions have been answered
        if($this->allQuestionsAnswered()){
            $correct = count(array_filter($this->questions, function ($question) {
                return $question->isCorrect();
            }));

            $total = count($this->questions);

            return ($correct / $total) * 100;
        }else {
            return false;
        }
    }

    private function allQuestionsAnswered()
    {
        foreach ($this->questions as $question){
            if($question->isCorrect() == null){
                return false;
            }
        }
        return true;
    }


}
