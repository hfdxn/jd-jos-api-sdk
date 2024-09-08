<?php
namespace JosOrderOaidSearch;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jos.domain.query.OrderListOpenQuery";
    }
        
    private $receiverName;
    
    public function setReceiverName($receiverName){
        $this->params['receiverName'] = $receiverName;
    }

    public function getReceiverName(){
        return $this->receiverName;
    }
            
    private $receiverMobile;
    
    public function setReceiverMobile($receiverMobile){
        $this->params['receiverMobile'] = $receiverMobile;
    }

    public function getReceiverMobile(){
        return $this->receiverMobile;
    }
            
    private $startDate;
    
    public function setStartDate($startDate){
        $this->params['startDate'] = $startDate;
    }

    public function getStartDate(){
        return $this->startDate;
    }
            
    private $endDate;
    
    public function setEndDate($endDate){
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }
            
    private $sceneId;
    
    public function setSceneId($sceneId){
        $this->params['sceneId'] = $sceneId;
    }

    public function getSceneId(){
        return $this->sceneId;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $venderCode;
    
    public function setVenderCode($venderCode){
        $this->params['venderCode'] = $venderCode;
    }

    public function getVenderCode(){
        return $this->venderCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>