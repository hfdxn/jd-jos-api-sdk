<?php
namespace SellerPromotionAddSkus;
class Client_info{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.market.api.ClientInfo";
    }
        
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
            
    private $version;
    
    public function setVersion($version){
        $this->params['version'] = $version;
    }

    public function getVersion(){
        return $this->version;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $port;
    
    public function setPort($port){
        $this->params['port'] = $port;
    }

    public function getPort(){
        return $this->port;
    }
            
    private $requestId;
    
    public function setRequestId($requestId){
        $this->params['requestId'] = $requestId;
    }

    public function getRequestId(){
        return $this->requestId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>