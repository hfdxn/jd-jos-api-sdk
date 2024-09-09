<?php

namespace JdJos\jd\request\domain\Jd3csOrderNoFinishOrder;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.NoFinishOrder";
    }
        
    private $reason;
    
    public function setReason($reason){
        $this->params['reason'] = $reason;
    }

    public function getReason(){
        return $this->reason;
    }
            
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $bookedOrderTime;
    
    public function setBookedOrderTime($bookedOrderTime){
        $this->params['bookedOrderTime'] = $bookedOrderTime;
    }

    public function getBookedOrderTime(){
        return $this->bookedOrderTime;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>