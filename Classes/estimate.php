<?php

/* 
    Class for Estimate object, creates the estimate with the data inputted from processCreateEstimate.php
*/

class Estimate {
    private $estimate_id;
    private $job_id;
    private $tradesman_email;
    private $total_cost;
    private $cost_parts;
    private $estimate_exp;


    //construct function
    public function __construct($job_id,$tradesman_email,$total_cost,$cost_parts,$estimate_exp){
        $this->job_id = $job_id;
        $this->tradesman_email = $tradesman_email;
        $this->total_cost = $total_cost;
        $this->cost_parts = $cost_parts;
        $this->estimate_exp = $estimate_exp;
    }

    //create a new estimate object and insert into Estimate table
    public static function createEstimate($mysqli,$job_id,$tradesman_email,$total_cost,$cost_parts,$estimate_exp){
        $insert = "INSERT INTO estimate (job_id,tradesman_email,total_cost,cost_parts,estimate_expiry) VALUES (?,?,?,?,?)";
        $stmt = $mysqli->prepare($insert);
        $stmt->bind_param('ssiss', $job_id,$tradesman_email,$total_cost,$cost_parts,$estimate_exp);   
        $stmt->execute();
        $stmt->close();
    }



//------ setter methods------
    public function setEstimateId($estimate_id){
        $this->$estimate_id = $estimate_id;
    }

    public function setJobId($job_id){
        $this->$job_id = $job_id;
    }

    public function setTradesmanEmail($tradesman_email){
        $this->$tradesman_email = $tradesman_email;
    }

    public function setTotalCost($total_cost){
        $this->$total_cost = $total_cost;
    }

    public function setCostParts($cost_parts){
        $this->$cost_parts = $cost_parts;
    }

    public function setEstimateExp($estimate_exp){
        $this->$estimate_exp = date_create($estimate_exp);
    }


//------ getter methods ------
    public function getEstimateId(){
       return $this->estimate_id;
    }

    public function getJobId(){
        return $this->job_id;
    }
    public function getTradesmanEmail(){
        return $this->tradesman_email;
    }

    public function getTotalCost(){
        return $this->total_cost;
    }

    public function getCostParts(){
        return $this->cost_parts;
    }

    public function getEstimateExp(){
        return $this->estimate_exp;
    }


    //method for debugging object instance
    public function debug(){
        echo"<pre><code>";
        var_dump($this);
        echo "</code></pre>";
    }
}
?>