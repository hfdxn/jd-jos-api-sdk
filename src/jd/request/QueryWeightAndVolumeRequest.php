<?php
class QueryWeightAndVolumeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.query.weightAndVolume";
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
                                                        		                                    	                   			private $pickUpCode;
    	                        
	public function setPickUpCode($pickUpCode){
		$this->pickUpCode = $pickUpCode;
         $this->apiParas["pickUpCode"] = $pickUpCode;
	}

	public function getPickUpCode(){
	  return $this->pickUpCode;
	}

                        	                   			private $documentType;
    	                        
	public function setDocumentType($documentType){
		$this->documentType = $documentType;
         $this->apiParas["documentType"] = $documentType;
	}

	public function getDocumentType(){
	  return $this->documentType;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                            }





        
 

