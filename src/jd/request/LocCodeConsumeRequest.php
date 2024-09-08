<?php
class LocCodeConsumeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.loc.code.consume";
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
                                    	                                            		                                    	                   			private $requestId;
    	                        
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["requestId"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                   			private $codeNum;
    	                        
	public function setCodeNum($codeNum){
		$this->codeNum = $codeNum;
         $this->apiParas["codeNum"] = $codeNum;
	}

	public function getCodeNum(){
	  return $this->codeNum;
	}

                        	                   			private $shopId;
    	                        
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shopId"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $pwdNumber;
    	                        
	public function setPwdNumber($pwdNumber){
		$this->pwdNumber = $pwdNumber;
         $this->apiParas["pwdNumber"] = $pwdNumber;
	}

	public function getPwdNumber(){
	  return $this->pwdNumber;
	}

                        	                   			private $consumeCount;
    	                        
	public function setConsumeCount($consumeCount){
		$this->consumeCount = $consumeCount;
         $this->apiParas["consumeCount"] = $consumeCount;
	}

	public function getConsumeCount(){
	  return $this->consumeCount;
	}

                            }





        
 

