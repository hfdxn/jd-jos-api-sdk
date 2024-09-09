<?php

namespace JdJos\jd\request\domain\SellerQuaCenterCategoryOptionalOperateFacadeQueryOperateCategory;
class CallerParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.qua.center.core.export.ohs.common.CallerParam";
    }
        
    private $buid;
    
    public function setBuid($buid){
        $this->params['buid'] = $buid;
    }

    public function getBuid(){
        return $this->buid;
    }
            
    private $tenantId;
    
    public function setTenantId($tenantId){
        $this->params['tenantId'] = $tenantId;
    }

    public function getTenantId(){
        return $this->tenantId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>