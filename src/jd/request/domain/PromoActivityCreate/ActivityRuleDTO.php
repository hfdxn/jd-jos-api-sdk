<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class ActivityRuleDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityRuleDTO";
    }
        
    private $preConditionDTO;
            
    public function setPreConditionDTO($preConditionDTO){
        $this->params['preConditionDTO'] = $preConditionDTO ->getInstance();
    }
        
            
    private $discountDTO;
            
    public function setDiscountDTO($discountDTO){
        $this->params['discountDTO'] = $discountDTO ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>