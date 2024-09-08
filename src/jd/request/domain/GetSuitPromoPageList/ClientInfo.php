<?php
namespace GetSuitPromoPageList;
class ClientInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.common.api.model.ClientInfo";
    }
        
    private $businessIdentity;
    
    public function setBusinessIdentity($businessIdentity){
        $this->params['businessIdentity'] = $businessIdentity;
    }

    public function getBusinessIdentity(){
        return $this->businessIdentity;
    }
            
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $userAgent;
    
    public function setUserAgent($userAgent){
        $this->params['userAgent'] = $userAgent;
    }

    public function getUserAgent(){
        return $this->userAgent;
    }
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
            
    private $version;
    
    public function setVersion($version){
        $this->params['version'] = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>