<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class BaseRequest{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.request.BaseRequest";
    }
        
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $password;
    
    public function setPassword($password){
        $this->params['password'] = $password;
    }

    public function getPassword(){
        return $this->password;
    }
            
    private $josRemoteIp;
    
    public function setJosRemoteIp($josRemoteIp){
        $this->params['josRemoteIp'] = $josRemoteIp;
    }

    public function getJosRemoteIp(){
        return $this->josRemoteIp;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $language;
    
    public function setLanguage($language){
        $this->params['language'] = $language;
    }

    public function getLanguage(){
        return $this->language;
    }
            
    private $site;
    
    public function setSite($site){
        $this->params['site'] = $site;
    }

    public function getSite(){
        return $this->site;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>