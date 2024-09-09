<?php

namespace JdJos\jd\request;
class YipOrderAddCustomizedCartRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.order.addCustomizedCart";
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
                                                        		                                    	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                   			private $customInstanceId;
    	                        
	public function setCustomInstanceId($customInstanceId){
		$this->customInstanceId = $customInstanceId;
         $this->apiParas["customInstanceId"] = $customInstanceId;
	}

	public function getCustomInstanceId(){
	  return $this->customInstanceId;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                                                    	                   			private $skuInfoString;
    	                        
	public function setSkuInfoString($skuInfoString){
		$this->skuInfoString = $skuInfoString;
         $this->apiParas["skuInfoString"] = $skuInfoString;
	}

	public function getSkuInfoString(){
	  return $this->skuInfoString;
	}

                        	}





        
 

