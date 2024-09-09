<?php

namespace JdJos\jd\request;
class GwsJzoneSendWxTemplateMessageByPinRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.gws.jzone.sendWxTemplateMessageByPin";
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
                                    	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

                                            		                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $color;
                              public function setColor($color ){
                 $this->color=$color;
                 $this->apiParas["color"] = $color;
              }

              public function getColor(){
              	return $this->color;
              }
                                                                                                                                                                                                                                                                                                                                              private $name;
                              public function setName($name ){
                 $this->name=$name;
                 $this->apiParas["name"] = $name;
              }

              public function getName(){
              	return $this->name;
              }
                                                                                                                                                                                                                                                                                                                                              private $value;
                              public function setValue($value ){
                 $this->value=$value;
                 $this->apiParas["value"] = $value;
              }

              public function getValue(){
              	return $this->value;
              }
                                                                                                                                        	                   			private $msgUrl;
    	                        
	public function setMsgUrl($msgUrl){
		$this->msgUrl = $msgUrl;
         $this->apiParas["msgUrl"] = $msgUrl;
	}

	public function getMsgUrl(){
	  return $this->msgUrl;
	}

                        	                   			private $templateId;
    	                        
	public function setTemplateId($templateId){
		$this->templateId = $templateId;
         $this->apiParas["templateId"] = $templateId;
	}

	public function getTemplateId(){
	  return $this->templateId;
	}

                        	                   			private $shortTemplateId;
    	                        
	public function setShortTemplateId($shortTemplateId){
		$this->shortTemplateId = $shortTemplateId;
         $this->apiParas["shortTemplateId"] = $shortTemplateId;
	}

	public function getShortTemplateId(){
	  return $this->shortTemplateId;
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

                            }





        
 

