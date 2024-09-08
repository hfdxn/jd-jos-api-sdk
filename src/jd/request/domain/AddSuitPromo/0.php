<?php
namespace AddSuitPromo;
class 0{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $isNeedToBuy;
    
    public function setIsNeedToBuy($isNeedToBuy){
        $this->params['isNeedToBuy'] = $isNeedToBuy;
    }

    public function getIsNeedToBuy(){
        return $this->isNeedToBuy;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $promoPrice;
    
    public function setPromoPrice($promoPrice){
        $this->params['promoPrice'] = $promoPrice;
    }

    public function getPromoPrice(){
        return $this->promoPrice;
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