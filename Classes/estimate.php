<?php
class Estimate {
    protected $estimate_id = null;
    protected $job_id = null;
    protected $tradesman_email = null;
    protected $total_cost = null;
    protected $cost_parts = null;
    protected $estimate_exp = null;


    public function __construct($job_id,$tradesman_email,$total_cost,$cost_parts,$estimate_exp){
        $this->job_id = $job_id;
        $this->tradesman_email = $tradesman_email;
        $this->total_cost = $total_cost;
        $this->cost_parts = $cost_parts;
        $this->estimate_exp = $estimate_exp;
    }

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
    public function setEstimateId($estimate_id){
       return $this->estimate_id;
    }

    public function getJobId($job_id){
        return $this->job_id;

    public function setTradesmanEmail($tradesman_email){
        return $this->tradesman_email;
    }

    public function setTotalCost($total_cost){
        return $this->total_cost;
    }

    public function setCostParts($cost_parts){
        return $this->cost_parts;
    }

    public function setEstimateExp($estimate_exp){
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