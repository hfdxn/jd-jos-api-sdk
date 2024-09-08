<?php
namespace PromoActivityCreate;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.request.CreateActivityRequest";
    }
        
    private $baseRequest;
            
    public function setBaseRequest($baseRequest){
        $this->params['baseRequest'] = $baseRequest ->getInstance();
    }
        
            
    private $activityDTO;
            
    public function setActivityDTO($activityDTO){
        $this->params['activityDTO'] = $activityDTO ->getInstance();
    }
        
            
    private $stepSubmit;
    
    public function setStepSubmit($stepSubmit){
        $this->params['stepSubmit'] = $stepSubmit;
    }

    public function getStepSubmit(){
        return $this->stepSubmit;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>