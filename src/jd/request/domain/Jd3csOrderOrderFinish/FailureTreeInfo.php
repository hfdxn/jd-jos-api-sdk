<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderFinish;
class FailureTreeInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.FailureTreeInfo";
    }
        
    private $failureName;
    
    public function setFailureName($failureName){
        $this->params['failureName'] = $failureName;
    }

    public function getFailureName(){
        return $this->failureName;
    }
            
    private $failureReason;
    
    public function setFailureReason($failureReason){
        $this->params['failureReason'] = $failureReason;
    }

    public function getFailureReason(){
        return $this->failureReason;
    }
            
    private $fixMethod;
    
    public function setFixMethod($fixMethod){
        $this->params['fixMethod'] = $fixMethod;
    }

    public function getFixMethod(){
        return $this->fixMethod;
    }
            
    private $repairObj;
    
    public function setRepairObj($repairObj){
        $this->params['repairObj'] = $repairObj;
    }

    public function getRepairObj(){
        return $this->repairObj;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>