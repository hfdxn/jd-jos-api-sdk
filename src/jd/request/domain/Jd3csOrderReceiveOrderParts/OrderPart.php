<?php

namespace JdJos\jd\request\domain\Jd3csOrderReceiveOrderParts;
class OrderPart{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.OrderPart";
    }
        
    private $partsStat;
    
    public function setPartsStat($partsStat){
        $this->params['partsStat'] = $partsStat;
    }

    public function getPartsStat(){
        return $this->partsStat;
    }
            
    private $oldPartsQty;
    
    public function setOldPartsQty($oldPartsQty){
        $this->params['oldPartsQty'] = $oldPartsQty;
    }

    public function getOldPartsQty(){
        return $this->oldPartsQty;
    }
            
    private $deliverNo;
    
    public function setDeliverNo($deliverNo){
        $this->params['deliverNo'] = $deliverNo;
    }

    public function getDeliverNo(){
        return $this->deliverNo;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $deliverCompany;
    
    public function setDeliverCompany($deliverCompany){
        $this->params['deliverCompany'] = $deliverCompany;
    }

    public function getDeliverCompany(){
        return $this->deliverCompany;
    }
            
    private $deliverArriveDate;
    
    public function setDeliverArriveDate($deliverArriveDate){
        $this->params['deliverArriveDate'] = $deliverArriveDate;
    }

    public function getDeliverArriveDate(){
        return $this->deliverArriveDate;
    }
            
    private $newPartsPrice;
    
    public function setNewPartsPrice($newPartsPrice){
        $this->params['newPartsPrice'] = $newPartsPrice;
    }

    public function getNewPartsPrice(){
        return $this->newPartsPrice;
    }
            
    private $oldPartsCode;
    
    public function setOldPartsCode($oldPartsCode){
        $this->params['oldPartsCode'] = $oldPartsCode;
    }

    public function getOldPartsCode(){
        return $this->oldPartsCode;
    }
            
    private $newPartsName;
    
    public function setNewPartsName($newPartsName){
        $this->params['newPartsName'] = $newPartsName;
    }

    public function getNewPartsName(){
        return $this->newPartsName;
    }
            
    private $newPartsCode;
    
    public function setNewPartsCode($newPartsCode){
        $this->params['newPartsCode'] = $newPartsCode;
    }

    public function getNewPartsCode(){
        return $this->newPartsCode;
    }
            
    private $oldPartsName;
    
    public function setOldPartsName($oldPartsName){
        $this->params['oldPartsName'] = $oldPartsName;
    }

    public function getOldPartsName(){
        return $this->oldPartsName;
    }
            
    private $uniqueId;
    
    public function setUniqueId($uniqueId){
        $this->params['uniqueId'] = $uniqueId;
    }

    public function getUniqueId(){
        return $this->uniqueId;
    }
            
    private $newPartsQty;
    
    public function setNewPartsQty($newPartsQty){
        $this->params['newPartsQty'] = $newPartsQty;
    }

    public function getNewPartsQty(){
        return $this->newPartsQty;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>