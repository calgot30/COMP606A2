<?php

/* 
    Class for Tradesman object, similar to the customer object, it takes the information from the user and checks to see if it 
    uses the same email, if not then a new account is created.
*/

class Tradesman{
    private $id;
    private $name;
    private $email;
    private $password;
    private $number;
    private $area;
    private $job_id;
    protected $trade_name = null;
    protected $quote_id = null;

    //constructor
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

    //checks if users email is the same as any on the tradesman db table, if not then an account is created. Otherwise the user is prompted to try again
    public static function createTradesman($mysqli,$name,$email,$number,$area,$password,$trade){
        $sql = "SELECT tradesman_email FROM tradesman WHERE tradesman_email = ? LIMIT 1";

        $insert = "INSERT INTO tradesman (tradesman_name, tradesman_email, tradesman_password, tradesman_number, area, trade_name) VALUES (?,?,?,?,?,?)";

        //checks that the email isn't already in use
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();

        $rnum = $stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt = $mysqli->prepare($insert);
            $stmt->bind_param('ssssss', $name, $email, $hashpassword, $number, $area,$trade);
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


public function setTradeName($trade_name){
        $this->trade_name = $trade_name;
    }

    public function setQuoteId($quote_id){
        $this->quote_id = $quote_id;
    }


//------------- getter methods ------------
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

    public function getTradeName(){
    return $this->trade_name;
    }

    public function getQuoteId(){
    return $this->quote_id;
    }

//method for debugging object instance
    public function debug(){
    echo"<pre><code>";
    var_dump($this);
    echo "</code></pre>";
    }
}

?>