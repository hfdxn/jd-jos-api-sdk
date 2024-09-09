<?php

namespace JdJos\jd\request;
class PopCustomsCenterServiceSoaDlzServicecallbackServiceCallbackRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.customs.center.service.soa.dlz.servicecallback.serviceCallback";
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
                                                        		                                    	                   			private $customsId;
    	                        
	public function setCustomsId($customsId){
		$this->customsId = $customsId;
         $this->apiParas["customsId"] = $customsId;
	}

	public function getCustomsId(){
	  return $this->customsId;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                        	                        	                                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $orderDesc;
    	                        
	public function setOrderDesc($orderDesc){
		$this->orderDesc = $orderDesc;
         $this->apiParas["orderDesc"] = $orderDesc;
	}

	public function getOrderDesc(){
	  return $this->orderDesc;
	}

                        	                   			private $goodsCheck;
    	                        
	public function setGoodsCheck($goodsCheck){
		$this->goodsCheck = $goodsCheck;
         $this->apiParas["goodsCheck"] = $goodsCheck;
	}

	public function getGoodsCheck(){
	  return $this->goodsCheck;
	}

                        	                   			private $subCode;
    	                        
	public function setSubCode($subCode){
		$this->subCode = $subCode;
         $this->apiParas["subCode"] = $subCode;
	}

	public function getSubCode(){
	  return $this->subCode;
	}

                        	                   			private $subDesc;
    	                        
	public function setSubDesc($subDesc){
		$this->subDesc = $subDesc;
         $this->apiParas["subDesc"] = $subDesc;
	}

	public function getSubDesc(){
	  return $this->subDesc;
	}

                            }





        
 

