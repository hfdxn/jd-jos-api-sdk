<?php

namespace JdJos\jd\request\domain\YipCustomizedCancelCustomServiceApply;
class SkuServiceCancelApplyVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.customization.center.open.entity.customService.SkuServiceCancelApplyVo";
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
            
    private $locale;
    
    public function setLocale($locale){
        $this->params['locale'] = $locale;
    }

    public function getLocale(){
        return $this->locale;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>