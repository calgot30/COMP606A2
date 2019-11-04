<?php

/* 
    Class for the job object, it takes the data that the user has put into the form and then creates a job object from that data.
*/

class Job {
    private $job_id;
    private $job_name;
    private $job_desc;
    private $cust_email;
    private $trade;
    private $area;
    private $jobcost;
    private $estdate;
    private $jobdate;

    public function __construct($name,$jobdesc,$trade,$jobcost,$jobdate,$estdate,$cust_email,$area){
        $this->name = $name;
        $this->jobdesc = $jobdesc;
        $this->cust_email = $cust_email;
        $this->trade = $trade;
        $this->area = $area;
        $this->jobcost = $jobcost;
        $this->jobdate = $jobdate;
        $this->estdate = $estdate;
    }

    //creating the job object
    public static function createJob($mysqli,$name, $jobdesc, $cust_email, $trade, $area, $jobcost, $jobdate, $estdate){
        $insert = "INSERT INTO job (job_name,job_desc,cust_email,trade_name,area,preferred_cost,date_needed,offer_end_date) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $mysqli->prepare($insert);
        $stmt->bind_param('sssssiss', $name, $jobdesc, $cust_email, $trade, $area, $jobcost, $jobdate, $estdate);   
        $stmt->execute();
        $stmt->close();
        $job = new Job(['JobName'],['JobDesc'],['Email'],['Trade'],['Area'],['JobCost'],['JobDate'],['EstDate']);
        return $job;
    }
    

    //---setter methods---
    public function setJobId($job_id){
        $this->$job_id = $job_id;
    }

    public function setName($name){
        $result = true;
        if (is_string($name)){
            $this->name = $name;
        }
        else $result = false;
        return $result;
    }

    public function setJobDesc($jobdesc){
        $this->$jobdesc = $jobdesc;
    }

    public function setCustEmail($cust_email){
        $this->$cust_email = $cust_email;
    }

    public function setTrade($trade){
        $result = true;
        if (is_string($trade)){
            $this->trade = $trade;
        }
        else $result = false;
        return $result;
    }

    public function setArea($area){
        $this->$area = $area;
    }

    public function setJobCost($jobcost){
        $this->$jobcost = $jobcost;
    }

    public function setJobDate($jobdate){
        $this->jobdate = date_create($jobdate);
    }

    public function setEstDate($estdate){
        $this->estdate = date_create($estdate);
    }


    //---getter methods---
    public function getJobId(){
        return $this->job_id;
    }

    public function getName(){
        return $this->name;
    }

    public function getJobDesc(){
        return $this->jobdesc;
    }

    public function getCustEmail(){
        return $this->cust_email;
    }

    public function getTrade(){
        return $this->trade;
    }

    public function getArea(){
        return $this->area;
    }

    public function getJobCost(){
        return $this->jobcost;
    }

    public function getEstDate(){
        return $this->estdate;
    }

    public function getJobDate(){
        return $this->jobdate;
    }


    //method for debugging object instance
    public function debug(){
        echo"<pre><code>";
        var_dump($this);
        echo "</code></pre>";
    }
}
?>