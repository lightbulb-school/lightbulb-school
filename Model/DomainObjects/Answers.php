<?php
// include('../somthing.php');
include_once "../Routes/DatabaseConnect.php";
/**search controller**/

class Answers
{

    public $searchQuery;

    // read from database
    public function __construct($searchQuery)
    {
        $this->searchQuery = $searchQuery;
    }

    /** Query user table**/
    public function readAnswers()
    {
        $conn = new DatabaseConnect();
        $conn = $conn->connectToDatabase();

        // $rawResults = $conn->query("SELECT * FROM users WHERE email = '$user' DESC ");
        // return @$rawResults;
        // return $this->searchQuery;

        return "ok answers works";
    }

    /** Query database**/
    public function createAnswers()
    {
        // return $this->searchQuery;
        return "ok it works";
    }

}
