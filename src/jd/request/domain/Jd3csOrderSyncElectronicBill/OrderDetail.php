<?php
namespace Jd3csOrderSyncElectronicBill;
class OrderDetail{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ElectronicBillOrderDetail";
    }
        
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $totalAmount;
    
    public function setTotalAmount($totalAmount){
        $this->params['totalAmount'] = $totalAmount;
    }

    public function getTotalAmount(){
        return $this->totalAmount;
    }
            
    private $skuNorms;
    
    public function setSkuNorms($skuNorms){
        $this->params['skuNorms'] = $skuNorms;
    }

    public function getSkuNorms(){
        return $this->skuNorms;
    }
            
    private $chargeTypeName;
    
    public function setChargeTypeName($chargeTypeName){
        $this->params['chargeTypeName'] = $chargeTypeName;
    }

    public function getChargeTypeName(){
        return $this->chargeTypeName;
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