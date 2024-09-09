<?php

namespace JdJos\jd\request\domain\Jd3csSparepartInfoDelivered;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.DeliveredSparePart";
    }
        
    private $partsOrderNo;
    
    public function setPartsOrderNo($partsOrderNo){
        $this->params['partsOrderNo'] = $partsOrderNo;
    }

    public function getPartsOrderNo(){
        return $this->partsOrderNo;
    }
            
    private $partsState;
    
    public function setPartsState($partsState){
        $this->params['partsState'] = $partsState;
    }

    public function getPartsState(){
        return $this->partsState;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>