<?php
namespace CreateSkuSymbolBind;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kechuangjie.rpc.domain.request.BdsSymbolBindRequest";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $token;
    
    public function setToken($token){
        $this->params['token'] = $token;
    }

    public function getToken(){
        return $this->token;
    }
            
    private $submitTime;
    
    public function setSubmitTime($submitTime){
        $this->params['submitTime'] = $submitTime;
    }

    public function getSubmitTime(){
        return $this->submitTime;
    }
            
    private $ownerName;
    
    public function setOwnerName($ownerName){
        $this->params['ownerName'] = $ownerName;
    }

    public function getOwnerName(){
        return $this->ownerName;
    }
            
    private $bussinessTypeEnum;
    
    public function setBussinessTypeEnum($bussinessTypeEnum){
        $this->params['bussinessTypeEnum'] = $bussinessTypeEnum;
    }

    public function getBussinessTypeEnum(){
        return $this->bussinessTypeEnum;
    }
            
    private $skuBindSymbolList;
                                        
    public function setSkuBindSymbolList($skuBindSymbolList){
        $size = count($skuBindSymbolList);
        for ($i=0; $i<$size; $i++){
            $skuBindSymbolList [$i] = $skuBindSymbolList [$i] ->getInstance();
        }
        $this->params['skuBindSymbolList'] = $skuBindSymbolList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>