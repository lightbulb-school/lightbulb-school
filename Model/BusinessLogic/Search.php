<?php
// include('../somthing.php');
include_once "../Model/DomainObjects/Answers.php";
include_once "../Model/DomainObjects/Questions.php";
/**search controller**/
class Search
{
    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function searchQuestionsAndAnswers()
    {
        $answers   = searchQuestions();
        $questions = searchQuestions();
    }

    public function searchQuestions()
    {
        $QuestionObject = new Question($this->request);
        // return $SearchModel->query;
        return $QuestionObject->readQuestions();

    }

    public function searchAnswers()
    {
        $AnswersObject = new Answers($this->request);
        // return $SearchModel->query;
        return $AnswersObject->readAnswers();

    }

    public function searchUsers()
    {
        $UsersObject = new Users($this->request);
        // return $SearchModel->query;
        return $UsersObject->readUsers();

    }
}
