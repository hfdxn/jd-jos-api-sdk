<?php

namespace JdJos\jd\request\domain\PopPromoCouponCreateCoupon;
class ClientInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.common.ClientInfo";
    }
        
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
            
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>