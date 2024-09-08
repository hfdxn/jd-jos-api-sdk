<?php
namespace PopOrderWaybillUpdate;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.order.external.request.JosRequest";
    }
        
    private $data;
            
    public function setData($data){
        $this->params['data'] = $data ->getInstance();
    }
        
            
    private $belongType;
    
    public function setBelongType($belongType){
        $this->params['belongType'] = $belongType;
    }

    public function getBelongType(){
        return $this->belongType;
    }
            
    private $remoteIp;
    
    public function setRemoteIp($remoteIp){
        $this->params['remoteIp'] = $remoteIp;
    }

    public function getRemoteIp(){
        return $this->remoteIp;
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
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
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