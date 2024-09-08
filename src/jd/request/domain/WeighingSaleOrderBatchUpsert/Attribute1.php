<?php
namespace WeighingSaleOrderBatchUpsert;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.nss.produce.sdk.prod.write.req.UpsertNsspSkuReq";
    }
        
    private $weightUuid;
    
    public function setWeightUuid($weightUuid){
        $this->params['weightUuid'] = $weightUuid;
    }

    public function getWeightUuid(){
        return $this->weightUuid;
    }
            
    private $actionType;
    
    public function setActionType($actionType){
        $this->params['actionType'] = $actionType;
    }

    public function getActionType(){
        return $this->actionType;
    }
            
    private $orignalNum;
    
    public function setOrignalNum($orignalNum){
        $this->params['orignalNum'] = $orignalNum;
    }

    public function getOrignalNum(){
        return $this->orignalNum;
    }
            
    private $skuUuid;
    
    public function setSkuUuid($skuUuid){
        $this->params['skuUuid'] = $skuUuid;
    }

    public function getSkuUuid(){
        return $this->skuUuid;
    }
            
    private $nsspUnit;
    
    public function setNsspUnit($nsspUnit){
        $this->params['nsspUnit'] = $nsspUnit;
    }

    public function getNsspUnit(){
        return $this->nsspUnit;
    }
            
    private $actualNum;
    
    public function setActualNum($actualNum){
        $this->params['actualNum'] = $actualNum;
    }

    public function getActualNum(){
        return $this->actualNum;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuNum;
    
    public function setSkuNum($skuNum){
        $this->params['skuNum'] = $skuNum;
    }

    public function getSkuNum(){
        return $this->skuNum;
    }
            
    private $price;
    
    public function setPrice($price){
        $this->params['price'] = $price;
    }

    public function getPrice(){
        return $this->price;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>