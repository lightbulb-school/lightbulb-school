<?php
// include('../somthing.php');

/**search controller**/
class DatabaseConnect
{
    public $host_name;
    public $database_name;
    public $user_name;
    public $password;
    
    
    public function __construct($host_name, $database_name, $user_name, $password)
    {
        $this->hostname = $host_name;
        $this->database = $database_name;
        $this->username = $user_name;
        $this->password = $password;
        
    }

    /** Query database**/
    public function searchDatabase()
    {
        try {
            return $conn = new PDO("mysql:host=$this->hostname;dbname=$this->database",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
            //print '<p>Connected to Database</p>';
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
            
            
            
    }
}