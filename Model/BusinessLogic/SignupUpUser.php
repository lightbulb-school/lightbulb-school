<?php
// include('../somthing.php');
include_once "../Model/DomainObjects/Users.php";

/**signup User Logic**/
class SignUpuser
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
        $UsersObject = new Users();
        // check if user exists before signing up new user;
        $userExists = $UsersObject->readUsers();

        if ($userExists) {
            //user exists
            return "it works";
        } else {
            //user does not exist
            return $UsersObject->createUsers();

        }
    }

}
