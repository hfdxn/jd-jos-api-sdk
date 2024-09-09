<?php

namespace JdJos\jd\request\domain\PromoActivityAddSkus;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.request.ParticipantRequest";
    }
        
    private $baseRequest;
            
    public function setBaseRequest($baseRequest){
        $this->params['baseRequest'] = $baseRequest ->getInstance();
    }
        
            
    private $activityParticipantDTO;
            
    public function setActivityParticipantDTO($activityParticipantDTO){
        $this->params['activityParticipantDTO'] = $activityParticipantDTO ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>