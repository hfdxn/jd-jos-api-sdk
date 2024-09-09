<?php

namespace JdJos\jd\request;
class YipCustomizedGetCustomInstanceIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.customized.getCustomInstanceId";
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
                                                        		                                    	                   			private $rawUserKey;
    	                        
	public function setRawUserKey($rawUserKey){
		$this->rawUserKey = $rawUserKey;
         $this->apiParas["rawUserKey"] = $rawUserKey;
	}

	public function getRawUserKey(){
	  return $this->rawUserKey;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                            }





        
 

