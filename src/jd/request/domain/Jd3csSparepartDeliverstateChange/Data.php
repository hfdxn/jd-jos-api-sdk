<?php

namespace JdJos\jd\request\domain\Jd3csSparepartDeliverstateChange;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.DeliveryInfo";
    }
        
    private $purchaserId;
    
    public function setPurchaserId($purchaserId){
        $this->params['purchaserId'] = $purchaserId;
    }

    public function getPurchaserId(){
        return $this->purchaserId;
    }
            
    private $partsOrderState;
    
    public function setPartsOrderState($partsOrderState){
        $this->params['partsOrderState'] = $partsOrderState;
    }

    public function getPartsOrderState(){
        return $this->partsOrderState;
    }
            
    private $partsOrderNo;
    
    public function setPartsOrderNo($partsOrderNo){
        $this->params['partsOrderNo'] = $partsOrderNo;
    }

    public function getPartsOrderNo(){
        return $this->partsOrderNo;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
            
    private $deliveryCode;
    
    public function setDeliveryCode($deliveryCode){
        $this->params['deliveryCode'] = $deliveryCode;
    }

    public function getDeliveryCode(){
        return $this->deliveryCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>