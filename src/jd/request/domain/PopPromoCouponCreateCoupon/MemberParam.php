<?php

namespace JdJos\jd\request\domain\PopPromoCouponCreateCoupon;
class MemberParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.member.MemberOuterParam";
    }
        
    private $userClass;
    
    public function setUserClass($userClass){
        $this->params['userClass'] = $userClass;
    }

    public function getUserClass(){
        return $this->userClass;
    }
            
    private $userLevel;
    
    public function setUserLevel($userLevel){
        $this->params['userLevel'] = $userLevel;
    }

    public function getUserLevel(){
        return $this->userLevel;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>