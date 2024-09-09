<?php

namespace JdJos\jd\request;
class MessagePushServicePushChatTextMessageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.MessagePushService.pushChatTextMessage";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $accessToken;
    	                        
	public function setAccessToken($accessToken){
		$this->accessToken = $accessToken;
         $this->apiParas["accessToken"] = $accessToken;
	}

	public function getAccessToken(){
	  return $this->accessToken;
	}

                        	                   			private $aspid;
    	                        
	public function setAspid($aspid){
		$this->aspid = $aspid;
         $this->apiParas["aspid"] = $aspid;
	}

	public function getAspid(){
	  return $this->aspid;
	}

                        	                   			private $accessid;
    	                        
	public function setAccessid($accessid){
		$this->accessid = $accessid;
         $this->apiParas["accessid"] = $accessid;
	}

	public function getAccessid(){
	  return $this->accessid;
	}

                        	                                                                        		                                                        		                                    	                   			private $fromPin;
    	                        
	public function setFromPin($fromPin){
		$this->fromPin = $fromPin;
         $this->apiParas["fromPin"] = $fromPin;
	}

	public function getFromPin(){
	  return $this->fromPin;
	}

                        	                   			private $fromApp;
    	                        
	public function setFromApp($fromApp){
		$this->fromApp = $fromApp;
         $this->apiParas["fromApp"] = $fromApp;
	}

	public function getFromApp(){
	  return $this->fromApp;
	}

                        	                   			private $fromClientType;
    	                        
	public function setFromClientType($fromClientType){
		$this->fromClientType = $fromClientType;
         $this->apiParas["fromClientType"] = $fromClientType;
	}

	public function getFromClientType(){
	  return $this->fromClientType;
	}

                        	                   			private $openIdSeller;
    	                                                                        
	public function setOpenIdSeller($openIdSeller){
		$this->openIdSeller = $openIdSeller;
         $this->apiParas["open_id_seller"] = $openIdSeller;
	}

	public function getOpenIdSeller(){
	  return $this->openIdSeller;
	}

                        	                   			private $xidSeller;
    	                                                            
	public function setXidSeller($xidSeller){
		$this->xidSeller = $xidSeller;
         $this->apiParas["xid_seller"] = $xidSeller;
	}

	public function getXidSeller(){
	  return $this->xidSeller;
	}

                                                                        		                                    	                   			private $toPin;
    	                        
	public function setToPin($toPin){
		$this->toPin = $toPin;
         $this->apiParas["toPin"] = $toPin;
	}

	public function getToPin(){
	  return $this->toPin;
	}

                        	                   			private $toApp;
    	                        
	public function setToApp($toApp){
		$this->toApp = $toApp;
         $this->apiParas["toApp"] = $toApp;
	}

	public function getToApp(){
	  return $this->toApp;
	}

                        	                   			private $toClientType;
    	                        
	public function setToClientType($toClientType){
		$this->toClientType = $toClientType;
         $this->apiParas["toClientType"] = $toClientType;
	}

	public function getToClientType(){
	  return $this->toClientType;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                        	                   			private $xidBuyer;
    	                                                            
	public function setXidBuyer($xidBuyer){
		$this->xidBuyer = $xidBuyer;
         $this->apiParas["xid_buyer"] = $xidBuyer;
	}

	public function getXidBuyer(){
	  return $this->xidBuyer;
	}

                                                                        		                                    	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $chatinfo;
    	                        
	public function setChatinfo($chatinfo){
		$this->chatinfo = $chatinfo;
         $this->apiParas["chatinfo"] = $chatinfo;
	}

	public function getChatinfo(){
	  return $this->chatinfo;
	}

                                                    	                   			private $upid;
    	                        
	public function setUpid($upid){
		$this->upid = $upid;
         $this->apiParas["upid"] = $upid;
	}

	public function getUpid(){
	  return $this->upid;
	}

                        	                   			private $ver;
    	                        
	public function setVer($ver){
		$this->ver = $ver;
         $this->apiParas["ver"] = $ver;
	}

	public function getVer(){
	  return $this->ver;
	}

                            }





        
 

