<?php

namespace JdJos\jd\request\domain\CreateAppointment;
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
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>