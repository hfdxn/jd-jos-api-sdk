<?php

namespace JdJos\jd\request\domain\CarrierReceiveServiceStatusReport;
class CarrierStatusReportReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ka.edn.sdk.dto.kuayue.CarrierStatusReportReq";
    }
        
    private $parentWaybillCode;
    
    public function setParentWaybillCode($parentWaybillCode){
        $this->params['parentWaybillCode'] = $parentWaybillCode;
    }

    public function getParentWaybillCode(){
        return $this->parentWaybillCode;
    }
            
    private $site;
    
    public function setSite($site){
        $this->params['site'] = $site;
    }

    public function getSite(){
        return $this->site;
    }
            
    private $opeUser;
    
    public function setOpeUser($opeUser){
        $this->params['opeUser'] = $opeUser;
    }

    public function getOpeUser(){
        return $this->opeUser;
    }
            
    private $waybillCode;
    
    public function setWaybillCode($waybillCode){
        $this->params['waybillCode'] = $waybillCode;
    }

    public function getWaybillCode(){
        return $this->waybillCode;
    }
            
    private $description;
    
    public function setDescription($description){
        $this->params['description'] = $description;
    }

    public function getDescription(){
        return $this->description;
    }
            
    private $logisticID;
    
    public function setLogisticID($logisticID){
        $this->params['logisticID'] = $logisticID;
    }

    public function getLogisticID(){
        return $this->logisticID;
    }
            
    private $operatorPhone;
    
    public function setOperatorPhone($operatorPhone){
        $this->params['operatorPhone'] = $operatorPhone;
    }

    public function getOperatorPhone(){
        return $this->operatorPhone;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
            
    private $carryType;
    
    public function setCarryType($carryType){
        $this->params['carryType'] = $carryType;
    }

    public function getCarryType(){
        return $this->carryType;
    }
            
    private $timestamp;
    
    public function setTimestamp($timestamp){
        $this->params['timestamp'] = $timestamp;
    }

    public function getTimestamp(){
        return $this->timestamp;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>