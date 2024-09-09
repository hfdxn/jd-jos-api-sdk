<?php

namespace JdJos\jd\request\domain\Jd3csOrderBatchSyncSiteAbilityInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.BatchSiteAbilityParam";
    }
        
    private $unifiedCode;
    
    public function setUnifiedCode($unifiedCode){
        $this->params['unifiedCode'] = $unifiedCode;
    }

    public function getUnifiedCode(){
        return $this->unifiedCode;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
            
    private $siteName;
    
    public function setSiteName($siteName){
        $this->params['siteName'] = $siteName;
    }

    public function getSiteName(){
        return $this->siteName;
    }
            
    private $siteAbilityInfoList;
                                        
    public function setSiteAbilityInfoList($siteAbilityInfoList){
        $size = count($siteAbilityInfoList);
        for ($i=0; $i<$size; $i++){
            $siteAbilityInfoList [$i] = $siteAbilityInfoList [$i] ->getInstance();
        }
        $this->params['siteAbilityInfoList'] = $siteAbilityInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>