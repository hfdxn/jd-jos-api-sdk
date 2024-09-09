<?php

namespace JdJos\jd\request\domain\SecurityOrderinfoLogUpload;
class OrderInfoLog{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.isvlog.domain.OrderInfoLog";
    }
        
    private $user_ip;
    
    public function setUser_ip($user_ip){
        $this->params['user_ip'] = $user_ip;
    }

    public function getUser_ip(){
        return $this->user_ip;
    }
            
    private $josAppKey;
    
    public function setJosAppKey($josAppKey){
        $this->params['josAppKey'] = $josAppKey;
    }

    public function getJosAppKey(){
        return $this->josAppKey;
    }
            
    private $jd_id;
    
    public function setJd_id($jd_id){
        $this->params['jd_id'] = $jd_id;
    }

    public function getJd_id(){
        return $this->jd_id;
    }
            
    private $device_id;
    
    public function setDevice_id($device_id){
        $this->params['device_id'] = $device_id;
    }

    public function getDevice_id(){
        return $this->device_id;
    }
            
    private $url;
    
    public function setUrl($url){
        $this->params['url'] = $url;
    }

    public function getUrl(){
        return $this->url;
    }
            
    private $app_name;
    
    public function setApp_name($app_name){
        $this->params['app_name'] = $app_name;
    }

    public function getApp_name(){
        return $this->app_name;
    }
            
    private $user_id;
    
    public function setUser_id($user_id){
        $this->params['user_id'] = $user_id;
    }

    public function getUser_id(){
        return $this->user_id;
    }
            
    private $file_md5;
    
    public function setFile_md5($file_md5){
        $this->params['file_md5'] = $file_md5;
    }

    public function getFile_md5(){
        return $this->file_md5;
    }
            
    private $orderOaidInfoList;
                                        
    public function setOrderOaidInfoList($orderOaidInfoList){
        $size = count($orderOaidInfoList);
        for ($i=0; $i<$size; $i++){
            $orderOaidInfoList [$i] = $orderOaidInfoList [$i] ->getInstance();
        }
        $this->params['orderOaidInfoList'] = $orderOaidInfoList;
    }
                                    
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $operation;
    
    public function setOperation($operation){
        $this->params['operation'] = $operation;
    }

    public function getOperation(){
        return $this->operation;
    }
            
    private $timestamp;
    
    public function setTimestamp($timestamp){
        $this->params['timestamp'] = $timestamp;
    }

    public function getTimestamp(){
        return $this->timestamp;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>