<?php
class Job {

    protected $job_id = null;
    protected $job_name = null;
    protected $job_desc = null;
    protected $cust_id = null;
    protected $trade_name = null;
    protected $area = null;
    protected $preferred_cost = null;
    protected $date_needed = null;
    protected $date_expires = null;

    public function __construct($job_id,$job_name,$job_desc,$cust_id,$trade_name,$area,$preferred_cost,$date_needed,$date_expires){
        $this->job_id = $job_id;
        $this->job_name = $job_name;
        $this->job_desc = $job_desc;
        $this->cust_id = $cust_id;
        $this->trade_name = $trade_name;
        $this->area = $area;
        $this->preferred_cost = $preferred_cost;
        $this->date_needed = $date_needed;
        $this->date_expires = $date_expires;
    }


    //---setter methods---
    public function setJobId($job_id){
        $this->$job_id = $job_id;
    }

    public function setJobName($job_name){
        $result = true;
        if (is_string($job_name)){
            $this->job_name = $job_name;
        }
        else $result = false;
        return $result;
    }

    public function setJobDesc($job_desc){
        $this->$job_desc = $job_desc;
    }

    public function setCustId($cust_id){
        $this->$cust_id = $cust_id;
    }

    public function setTradeName($trade_name){
        $result = true;
        if (is_string($trade_name)){
            $this->trade_name = $trade_name;
        }
        else $result = false;
        return $result;
    }

    public function setArea($area){
        $this->$area = $area;
    }

    public function setPreferredCost($preferred_cost){
        $this->$preferred_cost = $preferred_cost;
    }

    public function setDateNeeded($date_needed){
        $this->date_needed = date_create($date_needed);
    }

    public function setDateExpires($date_expires){
        $this->date_expires = date_create($date_expires);
    }


    //---getter methods---
    public function getJobId(){
        return $this->job_id;
    }

    public function getJobName(){
        return $this->job_name;
    }

    public function getJobDesc(){
        return $this->job_desc;
    }

    public function getCustId(){
        return $this->cust_id;
    }

    public function getTradeName(){
        return $this->trade_name;
    }

    public function getArea(){
        return $this->area;
    }

    public function getPreferredCost(){
        return $this->preferred_cost;
    }

    public function getDateNeeded(){
        return $this->date_needed;
    }

    public function getDateExpires(){
        return $this->date_expires;
    }


    //method for debugging object instance
    public function debug(){
        echo"<pre><code>";
        var_dump($this);
        echo "</code></pre>";
    }
}
?>