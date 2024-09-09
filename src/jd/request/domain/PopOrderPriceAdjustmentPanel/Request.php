<?php

namespace JdJos\jd\request\domain\PopOrderPriceAdjustmentPanel;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jos.domain.query.PriceAdjustmentPanelQuery";
    }
        
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>