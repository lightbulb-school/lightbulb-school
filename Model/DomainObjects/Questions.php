<?php
// include('../somthing.php');
include_once "../Routes/DatabaseConnect.php";
/**search controller**/

class Question
{

    public $searchQuery;

    // read from database
    public function __construct($searchQuery)
    {
        $this->searchQuery = $searchQuery;
    }

    /** Query user table**/
    public function readQuestions()
    {
        $conn = new DatabaseConnect();
        $conn = $conn->connectToDatabase();

        // $rawResults = $conn->query("SELECT * FROM users WHERE email = '$user' DESC ");
        // return @$rawResults;

        // return $this->searchQuery;
        return "question search works";
    }

    /** Query database**/
    public function createQuestions()
    {
        // return $this->searchQuery;
        return "ok it works";
    }

}
