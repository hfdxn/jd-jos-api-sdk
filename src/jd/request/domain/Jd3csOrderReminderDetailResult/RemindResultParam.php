<?php

namespace JdJos\jd\request\domain\Jd3csOrderReminderDetailResult;
class RemindResultParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.RemindResultParam";
    }
        
    private $result;
    
    public function setResult($result){
        $this->params['result'] = $result;
    }

    public function getResult(){
        return $this->result;
    }
            
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $remindId;
    
    public function setRemindId($remindId){
        $this->params['remindId'] = $remindId;
    }

    public function getRemindId(){
        return $this->remindId;
    }
            
    private $sceneClassification;
    
    public function setSceneClassification($sceneClassification){
        $this->params['sceneClassification'] = $sceneClassification;
    }

    public function getSceneClassification(){
        return $this->sceneClassification;
    }
            
    private $details;
    
    public function setDetails($details){
        $this->params['details'] = $details;
    }

    public function getDetails(){
        return $this->details;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>