<?php

namespace JdJos\jd\request\domain\ProductConfigSdkServiceSetProductConfig;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.ivc.product.publish.sdk.dto.product.ProductConfigInfoDto";
    }
        
    private $skuStockNum;
    
    public function setSkuStockNum($skuStockNum){
        $this->params['skuStockNum'] = $skuStockNum;
    }

    public function getSkuStockNum(){
        return $this->skuStockNum;
    }
            
    private $promiseDays;
    
    public function setPromiseDays($promiseDays){
        $this->params['promiseDays'] = $promiseDays;
    }

    public function getPromiseDays(){
        return $this->promiseDays;
    }
            
    private $czFlag;
    
    public function setCzFlag($czFlag){
        $this->params['czFlag'] = $czFlag;
    }

    public function getCzFlag(){
        return $this->czFlag;
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