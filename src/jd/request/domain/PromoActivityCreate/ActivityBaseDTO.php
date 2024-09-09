<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class ActivityBaseDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityBaseDTO";
    }
        
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $beginTime;
    
    public function setBeginTime($beginTime){
        $this->params['beginTime'] = $beginTime;
    }

    public function getBeginTime(){
        return $this->beginTime;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $bound;
    
    public function setBound($bound){
        $this->params['bound'] = $bound;
    }

    public function getBound(){
        return $this->bound;
    }
            
    private $extType;
    
    public function setExtType($extType){
        $this->params['extType'] = $extType;
    }

    public function getExtType(){
        return $this->extType;
    }
            
    private $rsn;
    
    public function setRsn($rsn){
        $this->params['rsn'] = $rsn;
    }

    public function getRsn(){
        return $this->rsn;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $venderType;
    
    public function setVenderType($venderType){
        $this->params['venderType'] = $venderType;
    }

    public function getVenderType(){
        return $this->venderType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>