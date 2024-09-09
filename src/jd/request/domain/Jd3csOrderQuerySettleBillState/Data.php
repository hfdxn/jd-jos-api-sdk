<?php

namespace JdJos\jd\request\domain\Jd3csOrderQuerySettleBillState;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SettleBillStateParam";
    }
        
    private $settleNo;
    
    public function setSettleNo($settleNo){
        $this->params['settleNo'] = $settleNo;
    }

    public function getSettleNo(){
        return $this->settleNo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>