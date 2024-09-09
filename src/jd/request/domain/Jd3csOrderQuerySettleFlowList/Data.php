<?php

namespace JdJos\jd\request\domain\Jd3csOrderQuerySettleFlowList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SettleBillDetailSearchParam";
    }
        
    private $secondServiceType;
    
    public function setSecondServiceType($secondServiceType){
        $this->params['secondServiceType'] = $secondServiceType;
    }

    public function getSecondServiceType(){
        return $this->secondServiceType;
    }
            
    private $itemCatIds;
                        
    public function setItemCatIds($itemCatIds){
        $this->params['itemCatIds'] = $itemCatIds;
    }
                    
            
    private $pageNo;
    
    public function setPageNo($pageNo){
        $this->params['pageNo'] = $pageNo;
    }

    public function getPageNo(){
        return $this->pageNo;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $settleRule;
    
    public function setSettleRule($settleRule){
        $this->params['settleRule'] = $settleRule;
    }

    public function getSettleRule(){
        return $this->settleRule;
    }
            
    private $staging;
    
    public function setStaging($staging){
        $this->params['staging'] = $staging;
    }

    public function getStaging(){
        return $this->staging;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>