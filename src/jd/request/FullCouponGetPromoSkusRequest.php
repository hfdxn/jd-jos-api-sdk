<?php

namespace JdJos\jd\request;
class FullCouponGetPromoSkusRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.fullCoupon.getPromoSkus";
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
                                                        		                                    	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $promoId;
    	                        
	public function setPromoId($promoId){
		$this->promoId = $promoId;
         $this->apiParas["promoId"] = $promoId;
	}

	public function getPromoId(){
	  return $this->promoId;
	}

                            }





        
 

