<?php
class CarGetChargeOrderMappingInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.car.getChargeOrderMappingInfo";
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
                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $startChargeSeq;
    	                        
	public function setStartChargeSeq($startChargeSeq){
		$this->startChargeSeq = $startChargeSeq;
         $this->apiParas["startChargeSeq"] = $startChargeSeq;
	}

	public function getStartChargeSeq(){
	  return $this->startChargeSeq;
	}

}





        
 

