<?php
namespace PopOrderWaybillUpdate;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.list.dsm.response.waybill.WayBillInfoDto";
    }
        
    private $partialShipmentInfoList;
                                        
    public function setPartialShipmentInfoList($partialShipmentInfoList){
        $size = count($partialShipmentInfoList);
        for ($i=0; $i<$size; $i++){
            $partialShipmentInfoList [$i] = $partialShipmentInfoList [$i] ->getInstance();
        }
        $this->params['partialShipmentInfoList'] = $partialShipmentInfoList;
    }
                                    
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>