<?php
namespace DongdongPacketJosChatMessagePush;
class Param1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dd.open.gw.api.domain.AccessSignature";
    }
        
    private $accessid;
    
    public function setAccessid($accessid){
        $this->params['accessid'] = $accessid;
    }

    public function getAccessid(){
        return $this->accessid;
    }
            
    private $aspid;
    
    public function setAspid($aspid){
        $this->params['aspid'] = $aspid;
    }

    public function getAspid(){
        return $this->aspid;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $accessToken;
    
    public function setAccessToken($accessToken){
        $this->params['accessToken'] = $accessToken;
    }

    public function getAccessToken(){
        return $this->accessToken;
    }
            
    private $version;
    
    public function setVersion($version){
        $this->params['version'] = $version;
    }

    public function getVersion(){
        return $this->version;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>