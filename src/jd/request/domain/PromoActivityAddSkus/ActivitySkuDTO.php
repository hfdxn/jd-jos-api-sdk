<?php

namespace JdJos\jd\request\domain\PromoActivityAddSkus;
class ActivitySkuDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivitySkuDTO";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $skuBound;
    
    public function setSkuBound($skuBound){
        $this->params['skuBound'] = $skuBound;
    }

    public function getSkuBound(){
        return $this->skuBound;
    }
            
    private $skuBindType;
    
    public function setSkuBindType($skuBindType){
        $this->params['skuBindType'] = $skuBindType;
    }

    public function getSkuBindType(){
        return $this->skuBindType;
    }
            
    private $promoPrice;
    
    public function setPromoPrice($promoPrice){
        $this->params['promoPrice'] = $promoPrice;
    }

    public function getPromoPrice(){
        return $this->promoPrice;
    }
            
    private $discountType;
    
    public function setDiscountType($discountType){
        $this->params['discountType'] = $discountType;
    }

    public function getDiscountType(){
        return $this->discountType;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
            
    private $spuId;
    
    public function setSpuId($spuId){
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId(){
        return $this->spuId;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $originPrice;
    
    public function setOriginPrice($originPrice){
        $this->params['originPrice'] = $originPrice;
    }

    public function getOriginPrice(){
        return $this->originPrice;
    }
            
    private $storeId;
    
    public function setStoreId($storeId){
        $this->params['storeId'] = $storeId;
    }

    public function getStoreId(){
        return $this->storeId;
    }
            
    private $buyType;
    
    public function setBuyType($buyType){
        $this->params['buyType'] = $buyType;
    }

    public function getBuyType(){
        return $this->buyType;
    }
            
    private $extMap;
            
    public function setExtMap($extMap){
        $this->params['extMap'] = $extMap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>