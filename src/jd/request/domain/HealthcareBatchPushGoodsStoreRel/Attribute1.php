<?php
namespace HealthcareBatchPushGoodsStoreRel;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.medical.examination.export.param.third.ThirdGoodsStoreRel";
    }
        
    private $vipType;
    
    public function setVipType($vipType){
        $this->params['vipType'] = $vipType;
    }

    public function getVipType(){
        return $this->vipType;
    }
            
    private $settlePrice;
    
    public function setSettlePrice($settlePrice){
        $this->params['settlePrice'] = $settlePrice;
    }

    public function getSettlePrice(){
        return $this->settlePrice;
    }
            
    private $storeId;
    
    public function setStoreId($storeId){
        $this->params['storeId'] = $storeId;
    }

    public function getStoreId(){
        return $this->storeId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>