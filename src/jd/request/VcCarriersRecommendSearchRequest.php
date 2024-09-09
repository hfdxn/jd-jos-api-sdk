<?php

namespace JdJos\jd\request;
class VcCarriersRecommendSearchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.carriers.recommend.search";
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
                                                        		                                    	                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $receiveProvinceId;
    	                        
	public function setReceiveProvinceId($receiveProvinceId){
		$this->receiveProvinceId = $receiveProvinceId;
         $this->apiParas["receiveProvinceId"] = $receiveProvinceId;
	}

	public function getReceiveProvinceId(){
	  return $this->receiveProvinceId;
	}

                        	                   			private $receiveCityId;
    	                        
	public function setReceiveCityId($receiveCityId){
		$this->receiveCityId = $receiveCityId;
         $this->apiParas["receiveCityId"] = $receiveCityId;
	}

	public function getReceiveCityId(){
	  return $this->receiveCityId;
	}

                        	                   			private $receiveCountyId;
    	                        
	public function setReceiveCountyId($receiveCountyId){
		$this->receiveCountyId = $receiveCountyId;
         $this->apiParas["receiveCountyId"] = $receiveCountyId;
	}

	public function getReceiveCountyId(){
	  return $this->receiveCountyId;
	}

                        	                   			private $receiveTownId;
    	                        
	public function setReceiveTownId($receiveTownId){
		$this->receiveTownId = $receiveTownId;
         $this->apiParas["receiveTownId"] = $receiveTownId;
	}

	public function getReceiveTownId(){
	  return $this->receiveTownId;
	}

                            }





        
 

