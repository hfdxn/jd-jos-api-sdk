<?php
namespace PromoActivityCreate;
class ActivityLimitDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityLimitDTO";
    }
        
    private $numLimited;
    
    public function setNumLimited($numLimited){
        $this->params['numLimited'] = $numLimited;
    }

    public function getNumLimited(){
        return $this->numLimited;
    }
            
    private $maxNum;
    
    public function setMaxNum($maxNum){
        $this->params['maxNum'] = $maxNum;
    }

    public function getMaxNum(){
        return $this->maxNum;
    }
            
    private $minNum;
    
    public function setMinNum($minNum){
        $this->params['minNum'] = $minNum;
    }

    public function getMinNum(){
        return $this->minNum;
    }
            
    private $timeBound;
    
    public function setTimeBound($timeBound){
        $this->params['timeBound'] = $timeBound;
    }

    public function getTimeBound(){
        return $this->timeBound;
    }
            
    private $saleNum;
    
    public function setSaleNum($saleNum){
        $this->params['saleNum'] = $saleNum;
    }

    public function getSaleNum(){
        return $this->saleNum;
    }
            
    private $maxNumForDay;
    
    public function setMaxNumForDay($maxNumForDay){
        $this->params['maxNumForDay'] = $maxNumForDay;
    }

    public function getMaxNumForDay(){
        return $this->maxNumForDay;
    }
            
    private $maxNumForUser;
    
    public function setMaxNumForUser($maxNumForUser){
        $this->params['maxNumForUser'] = $maxNumForUser;
    }

    public function getMaxNumForUser(){
        return $this->maxNumForUser;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>