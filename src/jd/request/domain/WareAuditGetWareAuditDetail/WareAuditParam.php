<?php
namespace WareAuditGetWareAuditDetail;
class WareAuditParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.keeper.sdk.domain.auditdetail.WareAuditParam";
    }
        
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $sourceLabel;
    
    public function setSourceLabel($sourceLabel){
        $this->params['sourceLabel'] = $sourceLabel;
    }

    public function getSourceLabel(){
        return $this->sourceLabel;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>