<?php
namespace Jd3csOrderTowMachineRepairFinish;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.TowMachineRepairCompletedParam";
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