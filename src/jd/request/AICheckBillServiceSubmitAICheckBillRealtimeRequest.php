<?php
class AICheckBillServiceSubmitAICheckBillRealtimeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AICheckBillService.submitAICheckBillRealtime";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                        private $bizOrderId;
                              public function setBizOrderId($bizOrderId ){
                 $this->bizOrderId=$bizOrderId;
                 $this->apiParas["bizOrderId"] = $bizOrderId;
              }

              public function getBizOrderId(){
              	return $this->bizOrderId;
              }
                                                                                                                                                                                                                                                                                                                                                               private $bizOrderIdType;
                              public function setBizOrderIdType($bizOrderIdType ){
                 $this->bizOrderIdType=$bizOrderIdType;
                 $this->apiParas["bizOrderIdType"] = $bizOrderIdType;
              }

              public function getBizOrderIdType(){
              	return $this->bizOrderIdType;
              }
                                                                                                                                                            		                                    	                   			private $appCode;
    	                        
	public function setAppCode($appCode){
		$this->appCode = $appCode;
         $this->apiParas["appCode"] = $appCode;
	}

	public function getAppCode(){
	  return $this->appCode;
	}

                                                    	                   			private $bizType;
    	                        
	public function setBizType($bizType){
		$this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
	}

	public function getBizType(){
	  return $this->bizType;
	}

                        	                   			private $bizCode;
    	                        
	public function setBizCode($bizCode){
		$this->bizCode = $bizCode;
         $this->apiParas["bizCode"] = $bizCode;
	}

	public function getBizCode(){
	  return $this->bizCode;
	}

                            }





        
 

