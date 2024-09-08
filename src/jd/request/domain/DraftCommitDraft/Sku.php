<?php
namespace DraftCommitDraft;
class Sku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.sku.JosSku";
    }
        
    private $currencySpuId;
    
    public function setCurrencySpuId($currencySpuId){
        $this->params['currencySpuId'] = $currencySpuId;
    }

    public function getCurrencySpuId(){
        return $this->currencySpuId;
    }
            
    private $saleAttrs;
                                        
    public function setSaleAttrs($saleAttrs){
        $size = count($saleAttrs);
        for ($i=0; $i<$size; $i++){
            $saleAttrs [$i] = $saleAttrs [$i] ->getInstance();
        }
        $this->params['saleAttrs'] = $saleAttrs;
    }
                                    
            
    private $features;
                                        
    public function setFeatures($features){
        $size = count($features);
        for ($i=0; $i<$size; $i++){
            $features [$i] = $features [$i] ->getInstance();
        }
        $this->params['features'] = $features;
    }
                                    
            
    private $josHouseSku;
            
    public function setJosHouseSku($josHouseSku){
        $this->params['josHouseSku'] = $josHouseSku ->getInstance();
    }
        
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $stockNum;
    
    public function setStockNum($stockNum){
        $this->params['stockNum'] = $stockNum;
    }

    public function getStockNum(){
        return $this->stockNum;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $upcCode;
    
    public function setUpcCode($upcCode){
        $this->params['upcCode'] = $upcCode;
    }

    public function getUpcCode(){
        return $this->upcCode;
    }
            
    private $multiCateProps;
                                        
    public function setMultiCateProps($multiCateProps){
        $size = count($multiCateProps);
        for ($i=0; $i<$size; $i++){
            $multiCateProps [$i] = $multiCateProps [$i] ->getInstance();
        }
        $this->params['multiCateProps'] = $multiCateProps;
    }
                                    
            
    private $outerId;
    
    public function setOuterId($outerId){
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId(){
        return $this->outerId;
    }
            
    private $saleAttrTemplateId;
    
    public function setSaleAttrTemplateId($saleAttrTemplateId){
        $this->params['saleAttrTemplateId'] = $saleAttrTemplateId;
    }

    public function getSaleAttrTemplateId(){
        return $this->saleAttrTemplateId;
    }
            
    private $lineationPrice;
            
    public function setLineationPrice($lineationPrice){
        $this->params['lineationPrice'] = $lineationPrice ->getInstance();
    }
        
            
    private $capacity;
    
    public function setCapacity($capacity){
        $this->params['capacity'] = $capacity;
    }

    public function getCapacity(){
        return $this->capacity;
    }
            
    private $promiseId;
    
    public function setPromiseId($promiseId){
        $this->params['promiseId'] = $promiseId;
    }

    public function getPromiseId(){
        return $this->promiseId;
    }
            
    private $enable;
    
    public function setEnable($enable){
        $this->params['enable'] = $enable;
    }

    public function getEnable(){
        return $this->enable;
    }
            
    private $weight;
    
    public function setWeight($weight){
        $this->params['weight'] = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
            
    private $incrStock;
    
    public function setIncrStock($incrStock){
        $this->params['incrStock'] = $incrStock;
    }

    public function getIncrStock(){
        return $this->incrStock;
    }
            
    private $incrType;
    
    public function setIncrType($incrType){
        $this->params['incrType'] = $incrType;
    }

    public function getIncrType(){
        return $this->incrType;
    }
            
    private $stockRfId;
    
    public function setStockRfId($stockRfId){
        $this->params['stockRfId'] = $stockRfId;
    }

    public function getStockRfId(){
        return $this->stockRfId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>