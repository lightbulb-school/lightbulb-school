<?php
// include('../somthing.php');
include_once "../Model/BusinessLogic/SignupUpUser.php";

/**signup controller**/
class SignUpController
{
    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email    = $email;
        $this->password = $password;
    }

    public function signUpUser()
    {
        $signUpModel = new Users($this->email, $this->password);
        // check if user exists before signing up new user;
        $userExists = $signUpModel->readUsers();

        if ($userExists) {
            //user exists
            return "it works";
        } else {
            //user does not exist
            $UsersObject = new Users($this->email, $this->password);
            return $UsersObject->createUsers();
            // return "it works";
        }
    }
}
