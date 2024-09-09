<?php

namespace JdJos\jd\request\domain\Jd3csSparepartResultConfirm;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SparePartResultConfirmParam";
    }
        
    private $sparePartNo;
    
    public function setSparePartNo($sparePartNo){
        $this->params['sparePartNo'] = $sparePartNo;
    }

    public function getSparePartNo(){
        return $this->sparePartNo;
    }
            
    private $confirmType;
    
    public function setConfirmType($confirmType){
        $this->params['confirmType'] = $confirmType;
    }

    public function getConfirmType(){
        return $this->confirmType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>