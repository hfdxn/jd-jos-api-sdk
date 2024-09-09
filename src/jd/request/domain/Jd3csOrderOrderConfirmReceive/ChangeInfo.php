<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderConfirmReceive;
class ChangeInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ChangeInfoParam";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $changeInfoVersion;
    
    public function setChangeInfoVersion($changeInfoVersion){
        $this->params['changeInfoVersion'] = $changeInfoVersion;
    }

    public function getChangeInfoVersion(){
        return $this->changeInfoVersion;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>