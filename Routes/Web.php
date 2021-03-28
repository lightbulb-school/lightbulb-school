<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
?>
<!-- <base href="<?php// echo constant('BASE_URL'); ?>"> -->
<?php
// include('../somthing.php');
// include_once('../Controller/SearchController.php');
// include_once('../Controller/SignUpController.php');

include_once("../Controller/SearchController.php");
include_once("../Controller/SignupController.php");
// handle http requests

if (isset($_POST['search_item'])) {
echo$request=$_POST['search_item'];

$saerch = new SearchController($request);
echo $saerch->search();


}

if (isset($_POST['first_name'])) {
$request=$_POST['first_name'];

$data = new SignUpController($request);
$success= $data->signUpUser();
if($success){
header("Location: ../View/dashboard.php");
};

}