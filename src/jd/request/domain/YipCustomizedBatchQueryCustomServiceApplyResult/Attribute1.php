<?php
namespace YipCustomizedBatchQueryCustomServiceApplyResult;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.customization.center.open.entity.customService.SkuServiceApplyResultVo";
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
    
    function getInstance(){
        return $this->params;
    }

}

?>