<?php

namespace JdJos\jd\request\domain\PopOrderPartialOutship;
class OutshipItem{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.external.request.outship.BatchStockOutOrder";
    }
        
    private $deliveryType;
    
    public function setDeliveryType($deliveryType){
        $this->params['deliveryType'] = $deliveryType;
    }

    public function getDeliveryType(){
        return $this->deliveryType;
    }
            
    private $orderIds;
                        
    public function setOrderIds($orderIds){
        $this->params['orderIds'] = $orderIds;
    }
                    
            
    private $venderTaskAddressId;
    
    public function setVenderTaskAddressId($venderTaskAddressId){
        $this->params['venderTaskAddressId'] = $venderTaskAddressId;
    }

    public function getVenderTaskAddressId(){
        return $this->venderTaskAddressId;
    }
            
    private $deliveryNumberDtoList;
                                        
    public function setDeliveryNumberDtoList($deliveryNumberDtoList){
        $size = count($deliveryNumberDtoList);
        for ($i=0; $i<$size; $i++){
            $deliveryNumberDtoList [$i] = $deliveryNumberDtoList [$i] ->getInstance();
        }
        $this->params['deliveryNumberDtoList'] = $deliveryNumberDtoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>