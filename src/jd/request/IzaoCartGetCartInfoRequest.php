<?php

namespace JdJos\jd\request;
class IzaoCartGetCartInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.izao.cart.getCartInfo";
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
                                    	                   			private $customInfoId;
    	                        
	public function setCustomInfoId($customInfoId){
		$this->customInfoId = $customInfoId;
         $this->apiParas["customInfoId"] = $customInfoId;
	}

	public function getCustomInfoId(){
	  return $this->customInfoId;
	}

                        	                   			private $cartType;
    	                        
	public function setCartType($cartType){
		$this->cartType = $cartType;
         $this->apiParas["cartType"] = $cartType;
	}

	public function getCartType(){
	  return $this->cartType;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

}





        
 

