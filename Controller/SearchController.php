<?php
// include('../somthing.php');
include_once("../Model/BusinessLogic/SearchModel.php");

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
        $SearchModel = new SearchModel($this->request);
        // return $SearchModel->query;
        return $SearchModel->searchDatabase();
        
    }
}