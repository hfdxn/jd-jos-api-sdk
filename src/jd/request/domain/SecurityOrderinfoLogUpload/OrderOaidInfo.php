<?php

namespace JdJos\jd\request\domain\SecurityOrderinfoLogUpload;
class OrderOaidInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.isvlog.domain.OrderOaidInfo";
    }
        
    private $receiver_name;
    
    public function setReceiver_name($receiver_name){
        $this->params['receiver_name'] = $receiver_name;
    }

    public function getReceiver_name(){
        return $this->receiver_name;
    }
            
    private $receiver_phone;
    
    public function setReceiver_phone($receiver_phone){
        $this->params['receiver_phone'] = $receiver_phone;
    }

    public function getReceiver_phone(){
        return $this->receiver_phone;
    }
            
    private $order_id;
    
    public function setOrder_id($order_id){
        $this->params['order_id'] = $order_id;
    }

    public function getOrder_id(){
        return $this->order_id;
    }
            
    private $receiver_addr;
    
    public function setReceiver_addr($receiver_addr){
        $this->params['receiver_addr'] = $receiver_addr;
    }

    public function getReceiver_addr(){
        return $this->receiver_addr;
    }
            
    private $oaid;
    
    public function setOaid($oaid){
        $this->params['oaid'] = $oaid;
    }

    public function getOaid(){
        return $this->oaid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>