<?php
namespace Jd3csOrderOrderFinish;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.FinishOrder";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $dealResult;
    
    public function setDealResult($dealResult){
        $this->params['dealResult'] = $dealResult;
    }

    public function getDealResult(){
        return $this->dealResult;
    }
            
    private $finishPics;
                        
    public function setFinishPics($finishPics){
        $this->params['finishPics'] = $finishPics;
    }
                    
            
    private $afterSalesInfo;
            
    public function setAfterSalesInfo($afterSalesInfo){
        $this->params['afterSalesInfo'] = $afterSalesInfo ->getInstance();
    }
        
            
    private $deviceInfo;
            
    public function setDeviceInfo($deviceInfo){
        $this->params['deviceInfo'] = $deviceInfo ->getInstance();
    }
        
            
    private $recycleInfo;
            
    public function setRecycleInfo($recycleInfo){
        $this->params['recycleInfo'] = $recycleInfo ->getInstance();
    }
        
            
    private $buyYear;
    
    public function setBuyYear($buyYear){
        $this->params['buyYear'] = $buyYear;
    }

    public function getBuyYear(){
        return $this->buyYear;
    }
            
    private $receiveBrand;
    
    public function setReceiveBrand($receiveBrand){
        $this->params['receiveBrand'] = $receiveBrand;
    }

    public function getReceiveBrand(){
        return $this->receiveBrand;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>