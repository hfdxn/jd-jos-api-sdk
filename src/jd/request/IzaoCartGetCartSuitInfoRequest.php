<?php

namespace JdJos\jd\request;
class IzaoCartGetCartSuitInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.izao.cart.getCartSuitInfo";
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
                                                        		                                    	                   			private $suitInfoId;
    	                        
	public function setSuitInfoId($suitInfoId){
		$this->suitInfoId = $suitInfoId;
         $this->apiParas["suitInfoId"] = $suitInfoId;
	}

	public function getSuitInfoId(){
	  return $this->suitInfoId;
	}

                                                    	                   			private $vendorId;
    	                        
	public function setVendorId($vendorId){
		$this->vendorId = $vendorId;
         $this->apiParas["vendorId"] = $vendorId;
	}

	public function getVendorId(){
	  return $this->vendorId;
	}

}





        
 

