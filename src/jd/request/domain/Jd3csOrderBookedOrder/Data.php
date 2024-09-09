<?php

namespace JdJos\jd\request\domain\Jd3csOrderBookedOrder;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.BookedOrder";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $engineerFirstOperate;
    
    public function setEngineerFirstOperate($engineerFirstOperate){
        $this->params['engineerFirstOperate'] = $engineerFirstOperate;
    }

    public function getEngineerFirstOperate(){
        return $this->engineerFirstOperate;
    }
            
    private $changeReason;
    
    public function setChangeReason($changeReason){
        $this->params['changeReason'] = $changeReason;
    }

    public function getChangeReason(){
        return $this->changeReason;
    }
            
    private $opType;
    
    public function setOpType($opType){
        $this->params['opType'] = $opType;
    }

    public function getOpType(){
        return $this->opType;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $engineerFinalOperate;
    
    public function setEngineerFinalOperate($engineerFinalOperate){
        $this->params['engineerFinalOperate'] = $engineerFinalOperate;
    }

    public function getEngineerFinalOperate(){
        return $this->engineerFinalOperate;
    }
            
    private $userFinalOnsite;
    
    public function setUserFinalOnsite($userFinalOnsite){
        $this->params['userFinalOnsite'] = $userFinalOnsite;
    }

    public function getUserFinalOnsite(){
        return $this->userFinalOnsite;
    }
            
    private $userFirstOnsite;
    
    public function setUserFirstOnsite($userFirstOnsite){
        $this->params['userFirstOnsite'] = $userFirstOnsite;
    }

    public function getUserFirstOnsite(){
        return $this->userFirstOnsite;
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