<?php
namespace AICheckBillServiceSubmitAICheckBillRealtime;
class AppInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.gyl.sdk.dto.aicheckbill.AppInfo";
    }
        
    private $appCode;
    
    public function setAppCode($appCode){
        $this->params['appCode'] = $appCode;
    }

    public function getAppCode(){
        return $this->appCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>