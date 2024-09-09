<?php

namespace JdJos\jd\request\domain\PopOrderLocRevokeCheckNumber;
class RevokeCheckNumParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.loc.assembledflow.api.jos.domain.RevokeCheckNumParam";
    }
        
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $requestId;
    
    public function setRequestId($requestId){
        $this->params['requestId'] = $requestId;
    }

    public function getRequestId(){
        return $this->requestId;
    }
            
    private $codeNum;
    
    public function setCodeNum($codeNum){
        $this->params['codeNum'] = $codeNum;
    }

    public function getCodeNum(){
        return $this->codeNum;
    }
            
    private $pwdNumber;
    
    public function setPwdNumber($pwdNumber){
        $this->params['pwdNumber'] = $pwdNumber;
    }

    public function getPwdNumber(){
        return $this->pwdNumber;
    }
            
    private $cardList;
                                        
    public function setCardList($cardList){
        $size = count($cardList);
        for ($i=0; $i<$size; $i++){
            $cardList [$i] = $cardList [$i] ->getInstance();
        }
        $this->params['cardList'] = $cardList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>