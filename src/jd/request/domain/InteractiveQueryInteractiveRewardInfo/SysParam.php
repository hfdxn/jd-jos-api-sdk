<?php
namespace InteractiveQueryInteractiveRewardInfo;
class SysParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interactive.jsf.SysParam";
    }
        
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>