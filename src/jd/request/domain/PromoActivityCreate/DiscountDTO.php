<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class DiscountDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.DiscountDTO";
    }
        
    private $minusMoney;
    
    public function setMinusMoney($minusMoney){
        $this->params['minusMoney'] = $minusMoney;
    }

    public function getMinusMoney(){
        return $this->minusMoney;
    }
            
    private $minusNum;
    
    public function setMinusNum($minusNum){
        $this->params['minusNum'] = $minusNum;
    }

    public function getMinusNum(){
        return $this->minusNum;
    }
            
    private $rebate;
    
    public function setRebate($rebate){
        $this->params['rebate'] = $rebate;
    }

    public function getRebate(){
        return $this->rebate;
    }
            
    private $maxDiscount;
    
    public function setMaxDiscount($maxDiscount){
        $this->params['maxDiscount'] = $maxDiscount;
    }

    public function getMaxDiscount(){
        return $this->maxDiscount;
    }
            
    private $maxSkuNum;
    
    public function setMaxSkuNum($maxSkuNum){
        $this->params['maxSkuNum'] = $maxSkuNum;
    }

    public function getMaxSkuNum(){
        return $this->maxSkuNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>