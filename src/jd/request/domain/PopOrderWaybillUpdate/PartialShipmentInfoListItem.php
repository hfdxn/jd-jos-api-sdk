<?php
namespace PopOrderWaybillUpdate;
class PartialShipmentInfoListItem{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.list.dsm.response.orderlist.PartialLogisticsInfoVo";
    }
        
    private $shipmentId;
    
    public function setShipmentId($shipmentId){
        $this->params['shipmentId'] = $shipmentId;
    }

    public function getShipmentId(){
        return $this->shipmentId;
    }
            
    private $waybillId;
    
    public function setWaybillId($waybillId){
        $this->params['waybillId'] = $waybillId;
    }

    public function getWaybillId(){
        return $this->waybillId;
    }
            
    private $logicId;
    
    public function setLogicId($logicId){
        $this->params['logicId'] = $logicId;
    }

    public function getLogicId(){
        return $this->logicId;
    }
            
    private $logicName;
    
    public function setLogicName($logicName){
        $this->params['logicName'] = $logicName;
    }

    public function getLogicName(){
        return $this->logicName;
    }
            
    private $packageNum;
    
    public function setPackageNum($packageNum){
        $this->params['packageNum'] = $packageNum;
    }

    public function getPackageNum(){
        return $this->packageNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>