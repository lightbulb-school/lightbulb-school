<?php
// include('../somthing.php');
include_once "../Model/BusinessLogic/Search.php";

/**search controller**/
class SearchController
{
    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function search()
    {
        $SearchObject = new Search($this->request);
        // return $SearchModel->query;
        return $SearchObject->searchQuestions();

    }
}
