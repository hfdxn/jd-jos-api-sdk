<?php

namespace JdJos\jd\request\domain\Jd3csOrderReminderInfoConfirm;
class RemindConfirmParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.RemindConfirmParam";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $confirmStat;
    
    public function setConfirmStat($confirmStat){
        $this->params['confirmStat'] = $confirmStat;
    }

    public function getConfirmStat(){
        return $this->confirmStat;
    }
            
    private $remindId;
    
    public function setRemindId($remindId){
        $this->params['remindId'] = $remindId;
    }

    public function getRemindId(){
        return $this->remindId;
    }
            
    private $brandRemark;
    
    public function setBrandRemark($brandRemark){
        $this->params['brandRemark'] = $brandRemark;
    }

    public function getBrandRemark(){
        return $this->brandRemark;
    }
            
    private $sceneClassification;
    
    public function setSceneClassification($sceneClassification){
        $this->params['sceneClassification'] = $sceneClassification;
    }

    public function getSceneClassification(){
        return $this->sceneClassification;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>