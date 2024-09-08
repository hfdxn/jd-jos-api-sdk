<?php
namespace InteractCenterApiJosJosFansActivityWriteServiceCreateGiftActivityWithResult;
class Attribute2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interact.center.api.domain.GiftSkuActivity";
    }
        
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $promoPrice;
    
    public function setPromoPrice($promoPrice){
        $this->params['promoPrice'] = $promoPrice;
    }

    public function getPromoPrice(){
        return $this->promoPrice;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $logo;
    
    public function setLogo($logo){
        $this->params['logo'] = $logo;
    }

    public function getLogo(){
        return $this->logo;
    }
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $perMaxNum;
    
    public function setPerMaxNum($perMaxNum){
        $this->params['perMaxNum'] = $perMaxNum;
    }

    public function getPerMaxNum(){
        return $this->perMaxNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>