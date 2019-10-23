<?php
class Estimate {
    protected $estimate_id = null;
    protected $tradesman_id = null;
    protected $total_cost = null;
    protected $cost_parts = null;
    protected $estimate_exp = null;

//------ setter methods------
    public function setEstimateId($estimate_id){
        $this->$estimate_id = $estimate_id;
    }

    public function setTradesmanId($tradesman_id){
        $this->tradesman_id = $tradesman_id;
    }

    public function setTotalCost($total_cost){
        $this->total_cost = $total_cost;
    }

    public function setCostParts($cost_parts){
        $this->cost_parts = $cost_parts;
    }

    public function setEstimateExp($estimate_exp){
        $this->estimate_exp = date_create($estimate_exp);
    }


//------ getter methods ------
    public function setEstimateId($estimate_id){
       return $this->estimate_id;
    }

    public function setTradesmanId($tradesman_id){
        return $this->tradesman_id;
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