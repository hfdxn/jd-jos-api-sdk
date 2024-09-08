<?php
namespace PromoActivityCreate;
class ActivityProcessType{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityProcessTypeDTO";
    }
        
    private $needManualCheck;
    
    public function setNeedManualCheck($needManualCheck){
        $this->params['needManualCheck'] = $needManualCheck;
    }

    public function getNeedManualCheck(){
        return $this->needManualCheck;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>