<?php
namespace Jd3csOrderOrderFinish;
class DeviceInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.DeviceInfo";
    }
        
    private $inSkuSn;
    
    public function setInSkuSn($inSkuSn){
        $this->params['inSkuSn'] = $inSkuSn;
    }

    public function getInSkuSn(){
        return $this->inSkuSn;
    }
            
    private $outSkuSn;
    
    public function setOutSkuSn($outSkuSn){
        $this->params['outSkuSn'] = $outSkuSn;
    }

    public function getOutSkuSn(){
        return $this->outSkuSn;
    }
            
    private $productSn;
    
    public function setProductSn($productSn){
        $this->params['productSn'] = $productSn;
    }

    public function getProductSn(){
        return $this->productSn;
    }
            
    private $inCodeList;
                        
    public function setInCodeList($inCodeList){
        $this->params['inCodeList'] = $inCodeList;
    }
                    
            
    private $outCodeList;
                        
    public function setOutCodeList($outCodeList){
        $this->params['outCodeList'] = $outCodeList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>