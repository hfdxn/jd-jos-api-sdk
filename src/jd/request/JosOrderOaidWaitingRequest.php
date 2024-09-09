<?php

namespace JdJos\jd\request;
class JosOrderOaidWaitingRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.order.oaid.waiting";
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
                                                        		                                    	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $isTelephoneCalculate;
    	                        
	public function setIsTelephoneCalculate($isTelephoneCalculate){
		$this->isTelephoneCalculate = $isTelephoneCalculate;
         $this->apiParas["isTelephoneCalculate"] = $isTelephoneCalculate;
	}

	public function getIsTelephoneCalculate(){
	  return $this->isTelephoneCalculate;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                        	                            }





        
 

