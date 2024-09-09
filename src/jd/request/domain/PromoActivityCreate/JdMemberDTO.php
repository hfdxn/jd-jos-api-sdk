<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class JdMemberDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.JdMemberDTO";
    }
        
    private $memberLevel;
    
    public function setMemberLevel($memberLevel){
        $this->params['memberLevel'] = $memberLevel;
    }

    public function getMemberLevel(){
        return $this->memberLevel;
    }
            
    private $memberOnly;
    
    public function setMemberOnly($memberOnly){
        $this->params['memberOnly'] = $memberOnly;
    }

    public function getMemberOnly(){
        return $this->memberOnly;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>