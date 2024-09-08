<?php
namespace MarketToolPresaleCreate;
class MemberInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.presale.api.domain.MemberInfo";
    }
        
    private $userClass;
    
    public function setUserClass($userClass){
        $this->params['userClass'] = $userClass;
    }

    public function getUserClass(){
        return $this->userClass;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>