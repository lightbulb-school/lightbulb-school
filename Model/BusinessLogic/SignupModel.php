<?php
// include('../somthing.php');
include_once("../Model/Sql/Crud.php");

/**signup model**/
class SignUpModel 
{
    /** Query database**/
    
    //**declare properties**//
    public $search_email;
    public $search_password;
    
    public function __construct($search_email,$search_password)
    {
        $this->search_email = $search_email;
        $this->search_password = $search_password;
    }

    // check if user exists before creating a new user
    public function searchForUserInDatabase()
    {
        $Crud = new Crud($this->search_email,$this->search_password);
        return $Crud->readData();
    }
    
    // create new user
    public function signUpUserToDatabase()
    {
        $Crud = new Crud($this->search_email,$this->search_password);
        return $Crud->createData();
    }
}