<?php

namespace JdJos\jd\request;
class YipCustomizedGetServiceProjectInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.customized.getServiceProjectInfo";
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
                                                        		                                    	                   			private $secondCdCode;
    	                        
	public function setSecondCdCode($secondCdCode){
		$this->secondCdCode = $secondCdCode;
         $this->apiParas["secondCdCode"] = $secondCdCode;
	}

	public function getSecondCdCode(){
	  return $this->secondCdCode;
	}

                        	                   			private $firstCdCode;
    	                        
	public function setFirstCdCode($firstCdCode){
		$this->firstCdCode = $firstCdCode;
         $this->apiParas["firstCdCode"] = $firstCdCode;
	}

	public function getFirstCdCode(){
	  return $this->firstCdCode;
	}

                        	                   			private $thirdCdCode;
    	                        
	public function setThirdCdCode($thirdCdCode){
		$this->thirdCdCode = $thirdCdCode;
         $this->apiParas["thirdCdCode"] = $thirdCdCode;
	}

	public function getThirdCdCode(){
	  return $this->thirdCdCode;
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





        
 

