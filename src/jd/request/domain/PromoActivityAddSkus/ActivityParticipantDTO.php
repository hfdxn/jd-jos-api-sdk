<?php

namespace JdJos\jd\request\domain\PromoActivityAddSkus;
class ActivityParticipantDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityParticipantDTO";
    }
        
    private $bound;
    
    public function setBound($bound){
        $this->params['bound'] = $bound;
    }

    public function getBound(){
        return $this->bound;
    }
            
    private $bindType;
    
    public function setBindType($bindType){
        $this->params['bindType'] = $bindType;
    }

    public function getBindType(){
        return $this->bindType;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
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