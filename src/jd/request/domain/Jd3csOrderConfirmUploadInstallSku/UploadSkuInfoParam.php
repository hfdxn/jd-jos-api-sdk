<?php

namespace JdJos\jd\request\domain\Jd3csOrderConfirmUploadInstallSku;
class UploadSkuInfoParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.UploadSkuInfoParam";
    }
        
    private $secondServiceType;
    
    public function setSecondServiceType($secondServiceType){
        $this->params['secondServiceType'] = $secondServiceType;
    }

    public function getSecondServiceType(){
        return $this->secondServiceType;
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