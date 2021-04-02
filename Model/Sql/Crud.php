<?php
// include('../somthing.php');
include_once("../Routes/DatabaseConnect.php");
/**search controller**/

class Crud
{
    public $search_query;

    // read from database
    public function __construct($search_query, $table='questions')
    {
        $this->search_query = $search_query;  
    }

    public function createData()
    {
        $conn = new DatabaseConnect('localhost', 'test', 'root', '');
        $conn = $conn->connectToDatabase();
        
        // search_query=$conn->query("INSERT INTO `search_table`(`search_id`, `user_id`, `r_question`, `r_answer`, `image_meta_data`, `title`, `publisher`, `lb_url`, `lb_date`, `status`) VALUES (0,'0','$question','$answer','0','$title','$publisher','$lb_url','$lb_date','$status')");
        // return $this->search_query;
        // return "ok it works";
    }

    /** Query database**/
    public function readData()
    {
        return $this->search_query;
        // return "ok it works";
    }

    public function updateData()
    {
        return $this->query;
        // return "ok it works";
    }

    public function deleteData()
    {
        return $this->query;
        // return "ok it works";
    }
}