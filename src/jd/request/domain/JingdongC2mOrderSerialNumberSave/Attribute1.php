<?php

namespace JdJos\jd\request\domain\JingdongC2mOrderSerialNumberSave;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.production.center.open.api.jsf.serialNumber.SerialNumberOrderEntity";
    }
        
    private $serialNumber;
    
    public function setSerialNumber($serialNumber){
        $this->params['serialNumber'] = $serialNumber;
    }

    public function getSerialNumber(){
        return $this->serialNumber;
    }
            
    private $coId;
    
    public function setCoId($coId){
        $this->params['coId'] = $coId;
    }

    public function getCoId(){
        return $this->coId;
    }
            
    private $sku;
    
    public function setSku($sku){
        $this->params['sku'] = $sku;
    }

    public function getSku(){
        return $this->sku;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>