<?php
// include('../somthing.php');
include_once("../Model/BusinessLogic/SignupModel.php");

/**signup controller**/
class SignUpController
{
    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function signUpUser()
    {
        $signUpModel = new SignUpModel($this->request);
        // return $SearchModel->query;
        return $signUpModel->signUpUserToDatabase();
    }
}