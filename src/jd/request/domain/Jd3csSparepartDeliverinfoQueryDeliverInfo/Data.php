<?php

namespace JdJos\jd\request\domain\Jd3csSparepartDeliverinfoQueryDeliverInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.PurchaserInfo";
    }
        
    private $purchaserId;
    
    public function setPurchaserId($purchaserId){
        $this->params['purchaserId'] = $purchaserId;
    }

    public function getPurchaserId(){
        return $this->purchaserId;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>