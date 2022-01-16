<?php

namespace Tests\Unit\Learning;

use App\LearningClasses\TestingJargon\Question;
use App\LearningClasses\TestingJargon\Quiz;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase {

    public function test_it_consists_of_a_question()
    {
        $quiz = new Quiz;

        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );

        $this->assertCount(1, $quiz->questions());
    }

    public function test_it_consists_of_a_multiple_questions()
    {
        $quiz = new Quiz;

        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 3?', 5)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 4?', 6)
        );

        $this->assertCount(3, $quiz->questions());
    }

    public function test_it_grades_a_perfect_quiz()
    {
        $quiz = new Quiz;

        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );

        $question = $quiz->nextQuestion();
        $question->answer(4);

        $this->assertEquals(100, $quiz->grade());
    }

    public function test_it_grades_a_failed_quiz()
    {
        $quiz = new Quiz;

        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );

        $question = $quiz->nextQuestion();
        $question->answer('incorrect answer');

        $this->assertEquals(0, $quiz->grade());
    }

    public function test_it_correctly_tracks_the_next_question_in_the_queue()
    {
        $quiz = new Quiz;
        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 3?', 5)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 4?', 6)
        );

        $this->assertEquals(1, $quiz->currentQuestion());
        $quiz->nextQuestion();
        $this->assertEquals(2, $quiz->currentQuestion());
        $quiz->nextQuestion();
        $this->assertEquals(3, $quiz->currentQuestion());
    }

    public function test_next_question_cannot_go_beyond_question_count()
    {
        $quiz = new Quiz;
        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 3?', 5)
        );

        $this->assertEquals(1, $quiz->currentQuestion());
        $quiz->nextQuestion();
        $this->assertEquals(2, $quiz->currentQuestion());

        $this->assertFalse($quiz->nextQuestion());
    }

    public function test_it_cannot_be_graded_until_all_questions_have_been_answered()
    {
        $quiz = new Quiz;
        $quiz->AddQuestion(
            new Question('What is 2 + 2?', 4)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 3?', 5)
        );
        $quiz->AddQuestion(
            new Question('What is 2 + 4?', 6)
        );


        $quiz->nextQuestion();
        $quiz->nextQuestion();
        $this->assertFalse($quiz->grade());

        $quiz->resetQuiz();
        $quiz->initQuestion()->answer(4);
        $this->assertEquals(1, $quiz->currentQuestion());
        $quiz->nextQuestion()->answer(5);
        $this->assertEquals(2, $quiz->currentQuestion());
        $quiz->nextQuestion()->answer(6);
        $this->assertEquals(3, $quiz->currentQuestion());
        $this->assertNotFalse($quiz->grade());

        /*$question = $quiz->nextQuestion();
        $question->answer(4);
        $question = $quiz->nextQuestion();
        $question->answer(5);
        $question = $quiz->nextQuestion();
        $question->answer(6);
        $this->assertEquals(100, $quiz->grade());*/
    }
}
