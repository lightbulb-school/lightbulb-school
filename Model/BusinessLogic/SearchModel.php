<?php
// include('../somthing.php');
include_once("../Model/Sql/Crud.php");

/**search controller**/
class SearchModel
{
    public $search_criteria;
    
    public function __construct($search_criteria)
    {
        $this->search_criteria = $search_criteria;
    }

    /** Query database**/
    public function searchDatabase()
    {
        $Crud = new Crud($this->search_criteria);
        return $Crud->readData();
    }
}