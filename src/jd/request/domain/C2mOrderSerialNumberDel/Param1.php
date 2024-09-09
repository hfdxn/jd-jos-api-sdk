<?php

namespace JdJos\jd\request\domain\C2mOrderSerialNumberDel;
class Param1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.production.center.open.api.jsf.serialNumber.SerialNumberQueryEntity";
    }
        
    private $orderSerialNumberList;
                                        
    public function setOrderSerialNumberList($orderSerialNumberList){
        $size = count($orderSerialNumberList);
        for ($i=0; $i<$size; $i++){
            $orderSerialNumberList [$i] = $orderSerialNumberList [$i] ->getInstance();
        }
        $this->params['orderSerialNumberList'] = $orderSerialNumberList;
    }
                                    
            
    private $loginName;
    
    public function setLoginName($loginName){
        $this->params['loginName'] = $loginName;
    }

    public function getLoginName(){
        return $this->loginName;
    }
            
    private $vendorCode;
    
    public function setVendorCode($vendorCode){
        $this->params['vendorCode'] = $vendorCode;
    }

    public function getVendorCode(){
        return $this->vendorCode;
    }
            
    private $venderCode;
    
    public function setVenderCode($venderCode){
        $this->params['venderCode'] = $venderCode;
    }

    public function getVenderCode(){
        return $this->venderCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>