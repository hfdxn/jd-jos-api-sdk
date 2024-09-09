<?php

namespace JdJos\jd\request\domain\Jd3csOrderSparePartReceived;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ReceivedSparePartParam";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>