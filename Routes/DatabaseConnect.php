<?php
// include('../somthing.php');

/**search controller**/
class DatabaseConnect
{
    const HOST_NAME     = 'localhost';
    const DATABASE_NAME = 'lightbulb_db';
    const USER_NAME     = 'root';
    const PASSWORD      = '';

    // public function __construct($host_name, $database_name, $user_name, $password)
    // {
    //     $this->hostname = $host_name;
    //     $this->database = $database_name;
    //     $this->username = $user_name;
    //     $this->password = $password;

    // }

    /** Query database**/
    public function connectToDatabase()
    {
        try {
            return $conn = new PDO("mysql:host=localhost;dbname=lightbulb_db", self::USER_NAME, self::PASSWORD);
            // return $conn = new PDO("mysql:host=localhost", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
            //print '<p>Connected to Database</p>';
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}
