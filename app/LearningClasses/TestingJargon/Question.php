<?php

namespace App\LearningClasses\TestingJargon;

class Question {
    protected $body;
    protected $solution;
    protected $correct;
    protected $answer;

    public function __construct ($body, $solution)
    {
        $this->body = $body;
        $this->solution = $solution;
    }

    public function answer($answer)
    {
        $this->answer = $answer;

        return $this->correct = $answer === $this->solution;
    }

    /**
     * @return mixed
     */
    public function isCorrect()
    {
        return $this->correct;
    }

    public function getBody(){
        return $this->body;
    }

    public function getCorrect(){
        return $this->correct;
    }

}
