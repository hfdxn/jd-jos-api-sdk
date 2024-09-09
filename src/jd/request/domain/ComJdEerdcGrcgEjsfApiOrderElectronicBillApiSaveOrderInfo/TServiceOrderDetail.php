<?php

namespace JdJos\jd\request\domain\ComJdEerdcGrcgEjsfApiOrderElectronicBillApiSaveOrderInfo;
class TServiceOrderDetail{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.eerdc.grcg.ejsf.vo.TServiceOrderDetailOut";
    }
        
    private $chargeTypeName;
    
    public function setChargeTypeName($chargeTypeName){
        $this->params['chargeTypeName'] = $chargeTypeName;
    }

    public function getChargeTypeName(){
        return $this->chargeTypeName;
    }
            
    private $totalPrice;
    
    public function setTotalPrice($totalPrice){
        $this->params['totalPrice'] = $totalPrice;
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }
            
    private $skuDiscount;
    
    public function setSkuDiscount($skuDiscount){
        $this->params['skuDiscount'] = $skuDiscount;
    }

    public function getSkuDiscount(){
        return $this->skuDiscount;
    }
            
    private $skuPrice;
    
    public function setSkuPrice($skuPrice){
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice(){
        return $this->skuPrice;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $skuNorms;
    
    public function setSkuNorms($skuNorms){
        $this->params['skuNorms'] = $skuNorms;
    }

    public function getSkuNorms(){
        return $this->skuNorms;
    }
            
    private $skuNum;
    
    public function setSkuNum($skuNum){
        $this->params['skuNum'] = $skuNum;
    }

    public function getSkuNum(){
        return $this->skuNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>