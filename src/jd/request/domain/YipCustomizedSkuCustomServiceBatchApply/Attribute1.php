<?php

namespace JdJos\jd\request\domain\YipCustomizedSkuCustomServiceBatchApply;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.customization.center.open.entity.customService.SkuServiceApplyVo";
    }
        
    private $serviceDetailList;
                                        
    public function setServiceDetailList($serviceDetailList){
        $size = count($serviceDetailList);
        for ($i=0; $i<$size; $i++){
            $serviceDetailList [$i] = $serviceDetailList [$i] ->getInstance();
        }
        $this->params['serviceDetailList'] = $serviceDetailList;
    }
                                    
            
    private $previewImageList;
                        
    public function setPreviewImageList($previewImageList){
        $this->params['previewImageList'] = $previewImageList;
    }
                    
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $systemCode;
    
    public function setSystemCode($systemCode){
        $this->params['systemCode'] = $systemCode;
    }

    public function getSystemCode(){
        return $this->systemCode;
    }
            
    private $identityId;
    
    public function setIdentityId($identityId){
        $this->params['identityId'] = $identityId;
    }

    public function getIdentityId(){
        return $this->identityId;
    }
            
    private $supplier;
    
    public function setSupplier($supplier){
        $this->params['supplier'] = $supplier;
    }

    public function getSupplier(){
        return $this->supplier;
    }
            
    private $serviceProjectId;
    
    public function setServiceProjectId($serviceProjectId){
        $this->params['serviceProjectId'] = $serviceProjectId;
    }

    public function getServiceProjectId(){
        return $this->serviceProjectId;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $customExt;
    
    public function setCustomExt($customExt){
        $this->params['customExt'] = $customExt;
    }

    public function getCustomExt(){
        return $this->customExt;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>