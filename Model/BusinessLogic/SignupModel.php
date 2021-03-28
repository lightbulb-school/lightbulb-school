<?php
// include('../somthing.php');
include_once("../Model/Sql/Crud.php");

/**signup model**/
class SignUpModel
{
    public $search_criteria;
    
    public function __construct($search_criteria)
    {
        $this->search_criteria = $search_criteria;
    }

    /** Query database**/
    public function signUpUserToDatabase()
    {
        $Crud = new Crud($this->search_criteria);
        return $Crud->createData();
    }
}