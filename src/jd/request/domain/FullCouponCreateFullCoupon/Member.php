<?php

namespace JdJos\jd\request\domain\FullCouponCreateFullCoupon;
class Member{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.orderpromo.OpenMemberCreateModelInfo";
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
            
    private $memberLevelName;
    
    public function setMemberLevelName($memberLevelName){
        $this->params['memberLevelName'] = $memberLevelName;
    }

    public function getMemberLevelName(){
        return $this->memberLevelName;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>