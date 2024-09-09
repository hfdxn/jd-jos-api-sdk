<?php

namespace JdJos\jd\request\domain\WeighingSaleOrderBatchSubmit;
class ClientInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.nss.produce.sdk.ClientInfo";
    }
        
    private $uniformBizInfo;
            
    public function setUniformBizInfo($uniformBizInfo){
        $this->params['uniformBizInfo'] = $uniformBizInfo ->getInstance();
    }
        
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
            
    private $opretor;
    
    public function setOpretor($opretor){
        $this->params['opretor'] = $opretor;
    }

    public function getOpretor(){
        return $this->opretor;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>