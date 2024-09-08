<?php
namespace Jd3csOrderAppointEngineer;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.AppointEngineer";
    }
        
    private $dispatchTime;
    
    public function setDispatchTime($dispatchTime){
        $this->params['dispatchTime'] = $dispatchTime;
    }

    public function getDispatchTime(){
        return $this->dispatchTime;
    }
            
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $engineerJDId;
    
    public function setEngineerJDId($engineerJDId){
        $this->params['engineerJDId'] = $engineerJDId;
    }

    public function getEngineerJDId(){
        return $this->engineerJDId;
    }
            
    private $engineerIdCard;
    
    public function setEngineerIdCard($engineerIdCard){
        $this->params['engineerIdCard'] = $engineerIdCard;
    }

    public function getEngineerIdCard(){
        return $this->engineerIdCard;
    }
            
    private $siteName;
    
    public function setSiteName($siteName){
        $this->params['siteName'] = $siteName;
    }

    public function getSiteName(){
        return $this->siteName;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $engineerName;
    
    public function setEngineerName($engineerName){
        $this->params['engineerName'] = $engineerName;
    }

    public function getEngineerName(){
        return $this->engineerName;
    }
            
    private $engineerMobile;
    
    public function setEngineerMobile($engineerMobile){
        $this->params['engineerMobile'] = $engineerMobile;
    }

    public function getEngineerMobile(){
        return $this->engineerMobile;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>