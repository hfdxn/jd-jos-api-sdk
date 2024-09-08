<?php
namespace Jd3csOrderSyncEngineerServiceArea;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.EngineerServiceArea";
    }
        
    private $engineerServiceAreaIdList;
                        
    public function setEngineerServiceAreaIdList($engineerServiceAreaIdList){
        $this->params['engineerServiceAreaIdList'] = $engineerServiceAreaIdList;
    }
                    
            
    private $engineerId;
    
    public function setEngineerId($engineerId){
        $this->params['engineerId'] = $engineerId;
    }

    public function getEngineerId(){
        return $this->engineerId;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>