<?php

namespace JdJos\jd\request\domain\PopOrderSopLogisticsUpdate;
class OneGlobalOrderModelNoLogistic{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.api.models.order.produce.model.OneGlobalOrderModelNoLogistic";
    }
        
    private $noCheckLogistics;
    
    public function setNoCheckLogistics($noCheckLogistics){
        $this->params['noCheckLogistics'] = $noCheckLogistics;
    }

    public function getNoCheckLogistics(){
        return $this->noCheckLogistics;
    }
            
    private $takeAddressId;
    
    public function setTakeAddressId($takeAddressId){
        $this->params['takeAddressId'] = $takeAddressId;
    }

    public function getTakeAddressId(){
        return $this->takeAddressId;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $guaranteeValue;
    
    public function setGuaranteeValue($guaranteeValue){
        $this->params['guaranteeValue'] = $guaranteeValue;
    }

    public function getGuaranteeValue(){
        return $this->guaranteeValue;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>