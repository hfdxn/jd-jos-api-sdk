<?php
namespace AICheckBillServiceSubmitAICheckBillRealtime;
class AiCheckBillReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.gyl.sdk.dto.aicheckbill.AICheckBillReq";
    }
        
    private $orderInfoList;
                                        
    public function setOrderInfoList($orderInfoList){
        $size = count($orderInfoList);
        for ($i=0; $i<$size; $i++){
            $orderInfoList [$i] = $orderInfoList [$i] ->getInstance();
        }
        $this->params['orderInfoList'] = $orderInfoList;
    }
                                    
            
    private $appInfo;
            
    public function setAppInfo($appInfo){
        $this->params['appInfo'] = $appInfo ->getInstance();
    }
        
            
    private $bizType;
    
    public function setBizType($bizType){
        $this->params['bizType'] = $bizType;
    }

    public function getBizType(){
        return $this->bizType;
    }
            
    private $bizCode;
    
    public function setBizCode($bizCode){
        $this->params['bizCode'] = $bizCode;
    }

    public function getBizCode(){
        return $this->bizCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>