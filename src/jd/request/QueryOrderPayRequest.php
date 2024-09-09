<?php

namespace JdJos\jd\request;
class QueryOrderPayRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryOrderPay";
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

                        	                   			private $merchantId;
    	                        
	public function setMerchantId($merchantId){
		$this->merchantId = $merchantId;
         $this->apiParas["merchantId"] = $merchantId;
	}

	public function getMerchantId(){
	  return $this->merchantId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $appToken;
    	                        
	public function setAppToken($appToken){
		$this->appToken = $appToken;
         $this->apiParas["appToken"] = $appToken;
	}

	public function getAppToken(){
	  return $this->appToken;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $systemNo;
    	                        
	public function setSystemNo($systemNo){
		$this->systemNo = $systemNo;
         $this->apiParas["systemNo"] = $systemNo;
	}

	public function getSystemNo(){
	  return $this->systemNo;
	}

                        	                   			private $merchantOrderNo;
    	                        
	public function setMerchantOrderNo($merchantOrderNo){
		$this->merchantOrderNo = $merchantOrderNo;
         $this->apiParas["merchantOrderNo"] = $merchantOrderNo;
	}

	public function getMerchantOrderNo(){
	  return $this->merchantOrderNo;
	}

                            }





        
 

