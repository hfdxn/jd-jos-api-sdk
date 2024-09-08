<?php
namespace PopOrderLocRevokeCheckNumber;
class Card{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.loc.assembledflow.api.jos.domain.RevokeCheckNumCardParam";
    }
        
    private $extCodeNum;
    
    public function setExtCodeNum($extCodeNum){
        $this->params['extCodeNum'] = $extCodeNum;
    }

    public function getExtCodeNum(){
        return $this->extCodeNum;
    }
            
    private $extPwdNumber;
    
    public function setExtPwdNumber($extPwdNumber){
        $this->params['extPwdNumber'] = $extPwdNumber;
    }

    public function getExtPwdNumber(){
        return $this->extPwdNumber;
    }
            
    private $count;
    
    public function setCount($count){
        $this->params['count'] = $count;
    }

    public function getCount(){
        return $this->count;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>