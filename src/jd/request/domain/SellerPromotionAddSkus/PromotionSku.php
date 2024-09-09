<?php

namespace JdJos\jd\request\domain\SellerPromotionAddSkus;
class PromotionSku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.market.api.domain.promotion.PromotionSku";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $bindType;
    
    public function setBindType($bindType){
        $this->params['bindType'] = $bindType;
    }

    public function getBindType(){
        return $this->bindType;
    }
            
    private $promoPrice;
    
    public function setPromoPrice($promoPrice){
        $this->params['promoPrice'] = $promoPrice;
    }

    public function getPromoPrice(){
        return $this->promoPrice;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $itemNum;
    
    public function setItemNum($itemNum){
        $this->params['itemNum'] = $itemNum;
    }

    public function getItemNum(){
        return $this->itemNum;
    }
            
    private $storeId;
    
    public function setStoreId($storeId){
        $this->params['storeId'] = $storeId;
    }

    public function getStoreId(){
        return $this->storeId;
    }
            
    private $discountType;
    
    public function setDiscountType($discountType){
        $this->params['discountType'] = $discountType;
    }

    public function getDiscountType(){
        return $this->discountType;
    }
            
    private $promoType;
    
    public function setPromoType($promoType){
        $this->params['promoType'] = $promoType;
    }

    public function getPromoType(){
        return $this->promoType;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
            
    private $discountRate;
    
    public function setDiscountRate($discountRate){
        $this->params['discountRate'] = $discountRate;
    }

    public function getDiscountRate(){
        return $this->discountRate;
    }
            
    private $seq;
    
    public function setSeq($seq){
        $this->params['seq'] = $seq;
    }

    public function getSeq(){
        return $this->seq;
    }
            
    private $isNeedToBuy;
    
    public function setIsNeedToBuy($isNeedToBuy){
        $this->params['isNeedToBuy'] = $isNeedToBuy;
    }

    public function getIsNeedToBuy(){
        return $this->isNeedToBuy;
    }
            
    private $overlyingSuit;
    
    public function setOverlyingSuit($overlyingSuit){
        $this->params['overlyingSuit'] = $overlyingSuit;
    }

    public function getOverlyingSuit(){
        return $this->overlyingSuit;
    }
            
    private $maxNumLimit;
    
    public function setMaxNumLimit($maxNumLimit){
        $this->params['maxNumLimit'] = $maxNumLimit;
    }

    public function getMaxNumLimit(){
        return $this->maxNumLimit;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>