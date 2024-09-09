<?php

namespace JdJos\jd\request\domain\JosOrderOaidMerge;
class MergeItem{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jos.domain.model.OrderMergeDto";
    }
        
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $oaid;
    
    public function setOaid($oaid){
        $this->params['oaid'] = $oaid;
    }

    public function getOaid(){
        return $this->oaid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>