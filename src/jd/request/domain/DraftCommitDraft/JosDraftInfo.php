<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class JosDraftInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.draft.JosDraftInfo";
    }
        
    private $house;
            
    public function setHouse($house){
        $this->params['house'] = $house ->getInstance();
    }
        
            
    private $josProductAll;
            
    public function setJosProductAll($josProductAll){
        $this->params['josProductAll'] = $josProductAll ->getInstance();
    }
        
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $josRemoteIp;
    
    public function setJosRemoteIp($josRemoteIp){
        $this->params['josRemoteIp'] = $josRemoteIp;
    }

    public function getJosRemoteIp(){
        return $this->josRemoteIp;
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