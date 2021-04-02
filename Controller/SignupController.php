<?php
// include('../somthing.php');
include_once("../Model/BusinessLogic/SignupModel.php");

/**signup controller**/
class SignUpController
{
    public $email;
    public $password;

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function signUpUser()
    {
        $signUpModel = new SignUpModel($this->$email,$this->$password);
        // return $SearchModel->query;
        return $signUpModel->signUpUserToDatabase();
    }
}