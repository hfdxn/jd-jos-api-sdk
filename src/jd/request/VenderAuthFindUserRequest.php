<?php

namespace JdJos\jd\request;
class VenderAuthFindUserRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.auth.findUser";
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
                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
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

}





        
 

