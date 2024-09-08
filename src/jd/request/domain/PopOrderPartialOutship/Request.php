<?php
namespace PopOrderPartialOutship;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.external.request.JosRequest";
    }
        
    private $data;
                                        
    public function setData($data){
        $size = count($data);
        for ($i=0; $i<$size; $i++){
            $data [$i] = $data [$i] ->getInstance();
        }
        $this->params['data'] = $data;
    }
                                    
            
    private $belongType;
    
    public function setBelongType($belongType){
        $this->params['belongType'] = $belongType;
    }

    public function getBelongType(){
        return $this->belongType;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $remoteIp;
    
    public function setRemoteIp($remoteIp){
        $this->params['remoteIp'] = $remoteIp;
    }

    public function getRemoteIp(){
        return $this->remoteIp;
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