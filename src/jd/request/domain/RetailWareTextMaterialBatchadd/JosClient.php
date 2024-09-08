<?php
namespace RetailWareTextMaterialBatchadd;
class JosClient{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.vender.media.api.video.jos.bean.JOSClient";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $josRemoteIp;
    
    public function setJosRemoteIp($josRemoteIp){
        $this->params['josRemoteIp'] = $josRemoteIp;
    }

    public function getJosRemoteIp(){
        return $this->josRemoteIp;
    }
            
    private $accessToken;
    
    public function setAccessToken($accessToken){
        $this->params['accessToken'] = $accessToken;
    }

    public function getAccessToken(){
        return $this->accessToken;
    }
            
    private $callEnd;
    
    public function setCallEnd($callEnd){
        $this->params['callEnd'] = $callEnd;
    }

    public function getCallEnd(){
        return $this->callEnd;
    }
            
    private $open_id_buyer;
    
    public function setOpen_id_buyer($open_id_buyer){
        $this->params['open_id_buyer'] = $open_id_buyer;
    }

    public function getOpen_id_buyer(){
        return $this->open_id_buyer;
    }
            
    private $xid_buyer;
    
    public function setXid_buyer($xid_buyer){
        $this->params['xid_buyer'] = $xid_buyer;
    }

    public function getXid_buyer(){
        return $this->xid_buyer;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>