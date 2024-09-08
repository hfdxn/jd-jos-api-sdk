<?php
namespace MarketToolPresaleCreate;
class ClientInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.common.api.model.ClientInfo";
    }
        
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $josRemoteIp;
    
    public function setJosRemoteIp($josRemoteIp){
        $this->params['josRemoteIp'] = $josRemoteIp;
    }

    public function getJosRemoteIp(){
        return $this->josRemoteIp;
    }
            
    private $businessIdentity;
    
    public function setBusinessIdentity($businessIdentity){
        $this->params['businessIdentity'] = $businessIdentity;
    }

    public function getBusinessIdentity(){
        return $this->businessIdentity;
    }
            
    private $extension;
            
    public function setExtension($extension){
        $this->params['extension'] = $extension ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>