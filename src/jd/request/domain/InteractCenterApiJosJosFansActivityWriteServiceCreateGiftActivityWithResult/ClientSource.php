<?php
namespace InteractCenterApiJosJosFansActivityWriteServiceCreateGiftActivityWithResult;
class ClientSource{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interact.center.api.domain.ClientSource";
    }
        
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>