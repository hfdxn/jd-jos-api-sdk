<?php

namespace JdJos\jd\request\domain\AscBizCustomerDeliveryStoreApply;
class WareDetailInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.WareDetailInfo";
    }
        
    private $afsApplyDetailId;
    
    public function setAfsApplyDetailId($afsApplyDetailId){
        $this->params['afsApplyDetailId'] = $afsApplyDetailId;
    }

    public function getAfsApplyDetailId(){
        return $this->afsApplyDetailId;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $wareName;
    
    public function setWareName($wareName){
        $this->params['wareName'] = $wareName;
    }

    public function getWareName(){
        return $this->wareName;
    }
            
    private $wareType;
    
    public function setWareType($wareType){
        $this->params['wareType'] = $wareType;
    }

    public function getWareType(){
        return $this->wareType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>