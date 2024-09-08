<?php
namespace JosOrderOaidDecrypt;
class GetReceiverInfoListReqVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.oaid.model.GetReceiverInfoListReqVO";
    }
        
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $extendProps;
            
    public function setExtendProps($extendProps){
        $this->params['extendProps'] = $extendProps ->getInstance();
    }
        
            
    private $orderInfos;
                                        
    public function setOrderInfos($orderInfos){
        $size = count($orderInfos);
        for ($i=0; $i<$size; $i++){
            $orderInfos [$i] = $orderInfos [$i] ->getInstance();
        }
        $this->params['orderInfos'] = $orderInfos;
    }
                                    
            
    private $expiration;
    
    public function setExpiration($expiration){
        $this->params['expiration'] = $expiration;
    }

    public function getExpiration(){
        return $this->expiration;
    }
            
    private $region;
    
    public function setRegion($region){
        $this->params['region'] = $region;
    }

    public function getRegion(){
        return $this->region;
    }
            
    private $scenesType;
    
    public function setScenesType($scenesType){
        $this->params['scenesType'] = $scenesType;
    }

    public function getScenesType(){
        return $this->scenesType;
    }
            
    private $open_id_seller;
    
    public function setOpen_id_seller($open_id_seller){
        $this->params['open_id_seller'] = $open_id_seller;
    }

    public function getOpen_id_seller(){
        return $this->open_id_seller;
    }
            
    private $xid_seller;
    
    public function setXid_seller($xid_seller){
        $this->params['xid_seller'] = $xid_seller;
    }

    public function getXid_seller(){
        return $this->xid_seller;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>