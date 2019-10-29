<?php
class Customer {
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $number;
    protected $area;
    protected $job_id;
    private $result = array();

/*      public function __construct($id,$name,$email,$password,$number,$area,$job_id){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->number = $number;
        $this->area = $area;
        $this->job_id = $job_id;
    } */
 
    public function RegisterUser($name,$email,$password,$number,$area){
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);
        $sql = "SELECT * FROM customer where cust_email ='$email'";

        $check = $this->db->query($sql);

        $count_row = $check->num_rows;

        if ($count_row == 0){
            $insert = "INSERT INTO Customer(cust_name, cust_email, cust_number, cust_password, area) VALUES (?,?,?,?,?)";
            $result = mysqli_query($this->db,$insert) or die(mysqli_connect_errno()."Data cannot be inserted");
            return $result;
        }
        else {
            return false;
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
        $this->password = password_hash($password, User::PASSWORD_BCRYPT);
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


class Tradesman extends Customer {
    protected $trade_name = null;
    protected $quote_id = null;

    public function __construct($id,$name,$email,$password,$number,$area,$job_id,$trade_name,$quote_id){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->number = $number;
        $this->area = $area;
        $this->job_id = $job_id;
        $this->trade_name=$trade_name;
        $this->quote_id=$quote_id;
    }


//------------- setter methods ------------
    public function setTradeName($trade_name){
        $this->trade_name = $trade_name;
    }

    public function setQuoteId($quote_id){
        $this->quote_id = $quote_id;
    }


//------------- getter methods ------------
    public function getTradeName(){
    return $this->trade_name;
    }

    public function getQuoteId(){
    return $this->quote_id;
    }
}





?>