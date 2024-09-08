<?php
namespace Jd3csOrderSparePartApply;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.PerformParam";
    }
        
    private $venderCode;
    
    public function setVenderCode($venderCode){
        $this->params['venderCode'] = $venderCode;
    }

    public function getVenderCode(){
        return $this->venderCode;
    }
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $createBy;
    
    public function setCreateBy($createBy){
        $this->params['createBy'] = $createBy;
    }

    public function getCreateBy(){
        return $this->createBy;
    }
            
    private $token;
    
    public function setToken($token){
        $this->params['token'] = $token;
    }

    public function getToken(){
        return $this->token;
    }
            
    private $data;
            
    public function setData($data){
        $this->params['data'] = $data ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>