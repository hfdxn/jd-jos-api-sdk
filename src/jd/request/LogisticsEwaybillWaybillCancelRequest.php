<?php

namespace JdJos\jd\request;
class LogisticsEwaybillWaybillCancelRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.ewaybill.waybill.cancel";
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
                                                        		                                    	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                        	                        	                   			private $providerId;
    	                        
	public function setProviderId($providerId){
		$this->providerId = $providerId;
         $this->apiParas["providerId"] = $providerId;
	}

	public function getProviderId(){
	  return $this->providerId;
	}

                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                        	                        	                   			private $cancelReason;
    	                        
	public function setCancelReason($cancelReason){
		$this->cancelReason = $cancelReason;
         $this->apiParas["cancelReason"] = $cancelReason;
	}

	public function getCancelReason(){
	  return $this->cancelReason;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                        	                        	                        	                            }





        
 

