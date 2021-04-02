<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include_once("../Controller/SearchController.php");
include_once("../Controller/SignupController.php");
// handle http requests

if (isset($_POST['search_item'])) {
echo$request=$_POST['search_item'];

$saerch = new SearchController($request);
echo $saerch->search();


}

if (isset($_POST['email'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    $data = new SignUpController($email,$password);
    $success= $data->signUpUser();
    echo$success;
    // if($success){
    // header("Location: ../View/dashboard.php");
    // };

}