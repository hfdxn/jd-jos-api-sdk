<?php

namespace JdJos\jd\request\domain\DongdongPacketJosChatMessagePush;
class Param2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dd.open.gw.api.domain.jos.ChatMessageJos";
    }
        
    private $upid;
    
    public function setUpid($upid){
        $this->params['upid'] = $upid;
    }

    public function getUpid(){
        return $this->upid;
    }
            
    private $ver;
    
    public function setVer($ver){
        $this->params['ver'] = $ver;
    }

    public function getVer(){
        return $this->ver;
    }
            
    private $fromApp;
    
    public function setFromApp($fromApp){
        $this->params['fromApp'] = $fromApp;
    }

    public function getFromApp(){
        return $this->fromApp;
    }
            
    private $fromClientType;
    
    public function setFromClientType($fromClientType){
        $this->params['fromClientType'] = $fromClientType;
    }

    public function getFromClientType(){
        return $this->fromClientType;
    }
            
    private $fromPin;
    
    public function setFromPin($fromPin){
        $this->params['fromPin'] = $fromPin;
    }

    public function getFromPin(){
        return $this->fromPin;
    }
            
    private $toApp;
    
    public function setToApp($toApp){
        $this->params['toApp'] = $toApp;
    }

    public function getToApp(){
        return $this->toApp;
    }
            
    private $toClientType;
    
    public function setToClientType($toClientType){
        $this->params['toClientType'] = $toClientType;
    }

    public function getToClientType(){
        return $this->toClientType;
    }
            
    private $toPin;
    
    public function setToPin($toPin){
        $this->params['toPin'] = $toPin;
    }

    public function getToPin(){
        return $this->toPin;
    }
            
    private $body;
    
    public function setBody($body){
        $this->params['body'] = $body;
    }

    public function getBody(){
        return $this->body;
    }
            
    private $open_id_buyer;
    
    public function setOpen_id_buyer($open_id_buyer){
        $this->params['open_id_buyer'] = $open_id_buyer;
    }

    public function getOpen_id_buyer(){
        return $this->open_id_buyer;
    }
            
    private $xid_buyer;
    
    public function setXid_buyer($xid_buyer){
        $this->params['xid_buyer'] = $xid_buyer;
    }

    public function getXid_buyer(){
        return $this->xid_buyer;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>