<?php

class Customer {
    protected $id = null;
    protected $name = null;
    protected $email = null;
    protected $password = null;
    protected $number = null;
    protected $area = null;
    protected $job_id = null;

    public function __construct($id,$name,$email,$password,$number,$area,$job_id){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->number = $number;
        $this->area = $area;
        $this->job_id = $job_id;
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

    public functionSetJobId($job_id){
        $this->job_id = $job_id;
    }

//------------ getter methods ------------------

    public function getId(){
        return $this->name;
    }


    public function getName(){
        return $this->name;
    }

    public function get




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
}








?>