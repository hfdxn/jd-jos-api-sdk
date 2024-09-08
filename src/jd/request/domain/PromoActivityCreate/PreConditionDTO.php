<?php
namespace PromoActivityCreate;
class PreConditionDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.PreConditionDTO";
    }
        
    private $needMoney;
    
    public function setNeedMoney($needMoney){
        $this->params['needMoney'] = $needMoney;
    }

    public function getNeedMoney(){
        return $this->needMoney;
    }
            
    private $addMoney;
    
    public function setAddMoney($addMoney){
        $this->params['addMoney'] = $addMoney;
    }

    public function getAddMoney(){
        return $this->addMoney;
    }
            
    private $needNum;
    
    public function setNeedNum($needNum){
        $this->params['needNum'] = $needNum;
    }

    public function getNeedNum(){
        return $this->needNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>