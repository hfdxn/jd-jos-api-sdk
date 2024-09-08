<?php
class PerformancePlatformServiceCallCancelOrderRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.PerformancePlatformService.callCancelOrder";
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
                                                        		                                    	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                            		                                    	                   			private $reason;
    	                        
	public function setReason($reason){
		$this->reason = $reason;
         $this->apiParas["reason"] = $reason;
	}

	public function getReason(){
	  return $this->reason;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $reasonId;
    	                        
	public function setReasonId($reasonId){
		$this->reasonId = $reasonId;
         $this->apiParas["reasonId"] = $reasonId;
	}

	public function getReasonId(){
	  return $this->reasonId;
	}

                                                        }





        
 

