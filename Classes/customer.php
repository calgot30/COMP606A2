<?php

/* 
    class for Customer object, connects to the customer table and creates the customer object for new users, checks if their email is already in use and won't allow the user
    to create an account with a duplicate email.
*/
class Customer {
    private $id;
    private $name;
    private $email;
    private $password;
    private $number;
    private $area;
    private $job_id;
    //private $result = array();

      public function __construct($name,$email,$password,$number,$area){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->number = $number;
        $this->area = $area; 
    } 
 
    //checks that the email the user is trying to enter isn't already in use, then inputs the data into the customer table.
    public static function createCustomer($mysqli,$name,$email,$number,$area,$password){
        $sql = "SELECT cust_email FROM customer WHERE cust_email = ? LIMIT 1";

        //inserts the values into the table
        $insert = "INSERT INTO customer(cust_name, cust_email, cust_password, cust_number, area) VALUES (?,?,?,?,?)";

        //checks that the email isn't already in use
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();

        //if not in use creates the new user then asks them to login
        $rnum = $stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt = $mysqli->prepare($insert);
            $stmt->bind_param('sssss', $name, $email, $hashpassword, $number, $area);
            $hashpassword = password_hash($password,PASSWORD_DEFAULT);
            $stmt->execute();
            $stmt->close();
            echo "Thank you for registering! Please login.";
        }
        else
        {
            echo "someones already using that";
            $stmt->close();
        }
    }


    
//------------- setter methods ------------
    public function setId($id){
        $this->$id = $id;
    }

    public function setName($name){
        $result = true;
        if (is_string($name)){
            $this->name = $name;
        }
        else $result = false;
        return $result;
    }

    public function setEmail($email){
        $result = true;
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
          $result = false;
        } else {
          $this->email = $email;
        }
        return $result;
    }  

    public function setPassword($password){
        $this->password = $password;
    }

    public function setNumber($number){
        $this->number = $number;
    }

    public function setArea($area){
        $this->area = $area;
    }

    public function setJobId($job_id){
        $this->job_id = $job_id;
    }


//------------ getter methods ------------------
    public function getId(){
        return $this->name;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getNumber(){
        return $this->number;
    }

    public function getArea(){
        return $this->area;
    }

    public function getJobId(){
        return $this->job_id;
    }


//method for debugging object instance
    public function debug(){
    echo"<pre><code>";
    var_dump($this);
    echo "</code></pre>";
    }
}
?>