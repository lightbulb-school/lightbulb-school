<?php
// include('../somthing.php');
include_once "../Routes/DatabaseConnect.php";
/**search controller**/


class Users
{

    public $id; 
    public $first_name; 
    public $last_name;  
    public $user_name; 
    public $email; 
    public $phone_number; 
    public $user_type; 
    public $password;  
    public $city;  
    public $country; 
    public $region; 
    public $status;  
    public $deleted; 
    public $created_at; 
    public $updated_at; 

    // read from database
    public function __construct($id=0, $first_name='', $last_name='', $user_name='', $email='', $phone_number='', $user_type='', $password='', $city='', $country='', $region='', $status=0, $deleted=0, $created_at=0, $updated_at=0)
    {
 
        $this->id    = strip_tags($id);
        $this->first_name    = strip_tags($first_name); 
        $this->last_name    = strip_tags($last_name);
        $this->user_name    = strip_tags($user_name); 
        $this->email    = strip_tags($email);
        $this->phone_number    = strip_tags($phone_number);
        $this->user_type    = strip_tags($user_type);
        $this->password    = strip_tags($password);
        $this->city    = strip_tags($city);
        $this->country    = strip_tags($country);
        $this->region    = strip_tags($region);
        $this->status    = strip_tags($status);
        $this->deleted    = strip_tags($deleted);
        $this->created_at    = strip_tags($created_at);
        $this->updated_at    = strip_tags($updated_at);

    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassWord($password)
    {
        $this->password = $password;
    }


    public function readUsers()
    {
        $conn = new DatabaseConnect();
        $conn = $conn->connectToDatabase();

        $username= $this->email;
        $password=$this->password;
    
        $sql= "SELECT * FROM users WHERE email = :email and password = :password ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $total = $stmt->rowCount();
        
        return $total;

    }

    public function createUsers()
    {
        $conn = new DatabaseConnect();
        $conn = $conn->connectToDatabase();

        // $id = $this->id;
        // $first_name = $this->first_name; 
        // $last_name = $this->last_name;
        // $user_name = $this->user_name; 
        // $email = $this->email;
        // $phone_number = $this->phone_number;
        // $user_type = $this->user_type;
        // $password = $this->password;
        // $city = $this->city;
        // $country = $this->country;
        // $region = $this->region;
        // $status = $this->status;
        // $deleted = $this->deleted;
        // $created_at = $this->created_at;
        // $updated_at = $this->updated_at;

        // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        // $stmt->bind_param("sss", $firstname, $lastname, $email);

        $id = $this->id;
        $first_name = $this->first_name; 
        $last_name = $this->last_name;
        $user_name = $this->user_name; 
        $email = $this->email;
        $phone_number = $this->phone_number;
        $user_type = $this->user_type;
        $password = $this->password;
        $city = $this->city;
        $country = $this->country;
        $region = $this->region;
        $status = $this->status;
        $deleted = $this->deleted;
        $created_at = $this->created_at;
        $updated_at = $this->updated_at;

        try {

        $stmt = $conn->prepare("INSERT INTO users (id, first_name, last_name, user_name, email, phone_number, user_type, password, city, country, region, status, deleted, created_at, updated_at) 
        VALUES (:id, :first_name, :last_name, :user_name, :email, :phone_number, :user_type, :password, :city, :country, :region, :status, :deleted, :created_at, :updated_at)");

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);
        $stmt->bindParam(':user_type', $user_type, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->bindParam(':country', $country, PDO::PARAM_STR);
        $stmt->bindParam(':region', $region, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->bindParam(':deleted', $deleted, PDO::PARAM_INT);
        $stmt->bindParam(':created_at', $created_at, PDO::PARAM_INT);
        $stmt->bindParam(':updated_at', $updated_at, PDO::PARAM_INT);
        $stmt->execute();

        echo "New records created successfully";
        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
        $conn = null;

        // $query = $conn->query("INSERT INTO `users`(`id`, `first_name`, `last_name`, `user_name`, `email`, `phone_number`, `user_type`, `password`, `city`, `country`, `region`, `status`, `deleted`, `created_at`, `updated_at`) 
        // VALUES (0, '$first_name', '$last_name', '$user_name', '$email', '$phone_number', '$user_type', '$password', '$city', '$country', '$region', 0, 0, 0, 0)");

    }

}
