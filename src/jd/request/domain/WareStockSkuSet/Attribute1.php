<?php

namespace JdJos\jd\request\domain\WareStockSkuSet;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.vendor.ware.shop.ohs.jos.req.stock.JosSkuStock";
    }
        
    private $stockModel;
    
    public function setStockModel($stockModel){
        $this->params['stockModel'] = $stockModel;
    }

    public function getStockModel(){
        return $this->stockModel;
    }
            
    private $incrStockNum;
    
    public function setIncrStockNum($incrStockNum){
        $this->params['incrStockNum'] = $incrStockNum;
    }

    public function getIncrStockNum(){
        return $this->incrStockNum;
    }
            
    private $stockNum;
    
    public function setStockNum($stockNum){
        $this->params['stockNum'] = $stockNum;
    }

    public function getStockNum(){
        return $this->stockNum;
    }
            
    private $storeId;
    
    public function setStoreId($storeId){
        $this->params['storeId'] = $storeId;
    }

    public function getStoreId(){
        return $this->storeId;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>