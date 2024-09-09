<?php

namespace JdJos\jd\request\domain\JosOrderOaidDecrypt;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.oaid.model.OrderInfoReqVO";
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