<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class ActivityDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityDTO";
    }
        
    private $activityBaseDTO;
            
    public function setActivityBaseDTO($activityBaseDTO){
        $this->params['activityBaseDTO'] = $activityBaseDTO ->getInstance();
    }
        
            
    private $activityScopeDTO;
            
    public function setActivityScopeDTO($activityScopeDTO){
        $this->params['activityScopeDTO'] = $activityScopeDTO ->getInstance();
    }
        
            
    private $activityLimitDTO;
            
    public function setActivityLimitDTO($activityLimitDTO){
        $this->params['activityLimitDTO'] = $activityLimitDTO ->getInstance();
    }
        
            
    private $activityRuleDTOList;
                                        
    public function setActivityRuleDTOList($activityRuleDTOList){
        $size = count($activityRuleDTOList);
        for ($i=0; $i<$size; $i++){
            $activityRuleDTOList [$i] = $activityRuleDTOList [$i] ->getInstance();
        }
        $this->params['activityRuleDTOList'] = $activityRuleDTOList;
    }
                                    
            
    private $activityShowDTO;
            
    public function setActivityShowDTO($activityShowDTO){
        $this->params['activityShowDTO'] = $activityShowDTO ->getInstance();
    }
        
            
    private $operatePermission;
            
    public function setOperatePermission($operatePermission){
        $this->params['operatePermission'] = $operatePermission ->getInstance();
    }
        
            
    private $activityProcessType;
            
    public function setActivityProcessType($activityProcessType){
        $this->params['activityProcessType'] = $activityProcessType ->getInstance();
    }
        
            
    private $extMap;
            
    public function setExtMap($extMap){
        $this->params['extMap'] = $extMap ->getInstance();
    }
        
            
    private $activitySkuDTOList;
                                        
    public function setActivitySkuDTOList($activitySkuDTOList){
        $size = count($activitySkuDTOList);
        for ($i=0; $i<$size; $i++){
            $activitySkuDTOList [$i] = $activitySkuDTOList [$i] ->getInstance();
        }
        $this->params['activitySkuDTOList'] = $activitySkuDTOList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>