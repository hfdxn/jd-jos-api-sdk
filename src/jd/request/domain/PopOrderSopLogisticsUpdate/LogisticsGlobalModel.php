<?php

namespace JdJos\jd\request\domain\PopOrderSopLogisticsUpdate;
class LogisticsGlobalModel{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.api.models.order.produce.model.LogisticsGlobalModel";
    }
        
    private $logiNoList;
                        
    public function setLogiNoList($logiNoList){
        $this->params['logiNoList'] = $logiNoList;
    }
                    
            
    private $packageNum;
    
    public function setPackageNum($packageNum){
        $this->params['packageNum'] = $packageNum;
    }

    public function getPackageNum(){
        return $this->packageNum;
    }
            
    private $logiCoprId;
    
    public function setLogiCoprId($logiCoprId){
        $this->params['logiCoprId'] = $logiCoprId;
    }

    public function getLogiCoprId(){
        return $this->logiCoprId;
    }
            
    private $logiScope;
    
    public function setLogiScope($logiScope){
        $this->params['logiScope'] = $logiScope;
    }

    public function getLogiScope(){
        return $this->logiScope;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>