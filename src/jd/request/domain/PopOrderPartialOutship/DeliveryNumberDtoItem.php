<?php

namespace JdJos\jd\request\domain\PopOrderPartialOutship;
class DeliveryNumberDtoItem{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.external.request.outship.DeliveryNumberDto";
    }
        
    private $deliveryNums;
                        
    public function setDeliveryNums($deliveryNums){
        $this->params['deliveryNums'] = $deliveryNums;
    }
                    
            
    private $zsWayBillNum;
    
    public function setZsWayBillNum($zsWayBillNum){
        $this->params['zsWayBillNum'] = $zsWayBillNum;
    }

    public function getZsWayBillNum(){
        return $this->zsWayBillNum;
    }
            
    private $zsDelivererPhone;
    
    public function setZsDelivererPhone($zsDelivererPhone){
        $this->params['zsDelivererPhone'] = $zsDelivererPhone;
    }

    public function getZsDelivererPhone(){
        return $this->zsDelivererPhone;
    }
            
    private $deliveryId;
    
    public function setDeliveryId($deliveryId){
        $this->params['deliveryId'] = $deliveryId;
    }

    public function getDeliveryId(){
        return $this->deliveryId;
    }
            
    private $zsCompanyPhone;
    
    public function setZsCompanyPhone($zsCompanyPhone){
        $this->params['zsCompanyPhone'] = $zsCompanyPhone;
    }

    public function getZsCompanyPhone(){
        return $this->zsCompanyPhone;
    }
            
    private $zsCompanyName;
    
    public function setZsCompanyName($zsCompanyName){
        $this->params['zsCompanyName'] = $zsCompanyName;
    }

    public function getZsCompanyName(){
        return $this->zsCompanyName;
    }
            
    private $zsDelivererName;
    
    public function setZsDelivererName($zsDelivererName){
        $this->params['zsDelivererName'] = $zsDelivererName;
    }

    public function getZsDelivererName(){
        return $this->zsDelivererName;
    }
            
    private $deliveryName;
    
    public function setDeliveryName($deliveryName){
        $this->params['deliveryName'] = $deliveryName;
    }

    public function getDeliveryName(){
        return $this->deliveryName;
    }
            
    private $partialShipmentGoodsList;
                                        
    public function setPartialShipmentGoodsList($partialShipmentGoodsList){
        $size = count($partialShipmentGoodsList);
        for ($i=0; $i<$size; $i++){
            $partialShipmentGoodsList [$i] = $partialShipmentGoodsList [$i] ->getInstance();
        }
        $this->params['partialShipmentGoodsList'] = $partialShipmentGoodsList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>