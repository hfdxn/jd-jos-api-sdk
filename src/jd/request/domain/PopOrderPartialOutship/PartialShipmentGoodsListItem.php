<?php

namespace JdJos\jd\request\domain\PopOrderPartialOutship;
class PartialShipmentGoodsListItem{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.external.request.outship.GoodsDto";
    }
        
    private $skuUuid;
    
    public function setSkuUuid($skuUuid){
        $this->params['skuUuid'] = $skuUuid;
    }

    public function getSkuUuid(){
        return $this->skuUuid;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
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