<?php
namespace JingdongYipProductionGetOrderCustomInfos;
class Query{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.production.center.open.api.jsf.customorder.CustomOrderInfoBatchQueryEntity";
    }
        
    private $supplier;
    
    public function setSupplier($supplier){
        $this->params['supplier'] = $supplier;
    }

    public function getSupplier(){
        return $this->supplier;
    }
            
    private $coId;
    
    public function setCoId($coId){
        $this->params['coId'] = $coId;
    }

    public function getCoId(){
        return $this->coId;
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
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $orderCreateStartTime;
    
    public function setOrderCreateStartTime($orderCreateStartTime){
        $this->params['orderCreateStartTime'] = $orderCreateStartTime;
    }

    public function getOrderCreateStartTime(){
        return $this->orderCreateStartTime;
    }
            
    private $orderCreateEndTime;
    
    public function setOrderCreateEndTime($orderCreateEndTime){
        $this->params['orderCreateEndTime'] = $orderCreateEndTime;
    }

    public function getOrderCreateEndTime(){
        return $this->orderCreateEndTime;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>