<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderCancel;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.CancelOrder";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $cancelType;
    
    public function setCancelType($cancelType){
        $this->params['cancelType'] = $cancelType;
    }

    public function getCancelType(){
        return $this->cancelType;
    }
            
    private $cancelReason;
    
    public function setCancelReason($cancelReason){
        $this->params['cancelReason'] = $cancelReason;
    }

    public function getCancelReason(){
        return $this->cancelReason;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>