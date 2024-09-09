<?php

namespace JdJos\jd\request\domain\Jd3csOrderReminderInfoResult;
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
            
    private $data;
                                        
    public function setData($data){
        $size = count($data);
        for ($i=0; $i<$size; $i++){
            $data [$i] = $data [$i] ->getInstance();
        }
        $this->params['data'] = $data;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>