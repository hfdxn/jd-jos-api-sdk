<?php

namespace JdJos\jd\request;
class YipProductionGetSupplierOrderCustomInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.getSupplierOrderCustomInfo";
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
                                                        		                                    	                   			private $supplier;
    	                        
	public function setSupplier($supplier){
		$this->supplier = $supplier;
         $this->apiParas["supplier"] = $supplier;
	}

	public function getSupplier(){
	  return $this->supplier;
	}

                        	                   			private $coId;
    	                        
	public function setCoId($coId){
		$this->coId = $coId;
         $this->apiParas["coId"] = $coId;
	}

	public function getCoId(){
	  return $this->coId;
	}

                                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

}





        
 

