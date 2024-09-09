<?php

namespace JdJos\jd\request;
class TokenToPinCenterConverstionJmEncryptPinRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.TokenToPinCenter.converstionJmEncryptPin";
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
                                                        		                                    	                   			private $encryptPin;
    	                        
	public function setEncryptPin($encryptPin){
		$this->encryptPin = $encryptPin;
         $this->apiParas["encryptPin"] = $encryptPin;
	}

	public function getEncryptPin(){
	  return $this->encryptPin;
	}

                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                            }





        
 

