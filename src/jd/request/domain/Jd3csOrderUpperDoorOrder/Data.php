<?php
namespace Jd3csOrderUpperDoorOrder;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.UpperDoorOrder";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $verifyCode;
    
    public function setVerifyCode($verifyCode){
        $this->params['verifyCode'] = $verifyCode;
    }

    public function getVerifyCode(){
        return $this->verifyCode;
    }
            
    private $lng;
    
    public function setLng($lng){
        $this->params['lng'] = $lng;
    }

    public function getLng(){
        return $this->lng;
    }
            
    private $engineerId;
    
    public function setEngineerId($engineerId){
        $this->params['engineerId'] = $engineerId;
    }

    public function getEngineerId(){
        return $this->engineerId;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $lat;
    
    public function setLat($lat){
        $this->params['lat'] = $lat;
    }

    public function getLat(){
        return $this->lat;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>