<?php
class SetStoreExternalInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.setStoreExternalInfo";
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
                                                        		                                    	                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $weightLimit;
    	                        
	public function setWeightLimit($weightLimit){
		$this->weightLimit = $weightLimit;
         $this->apiParas["weightLimit"] = $weightLimit;
	}

	public function getWeightLimit(){
	  return $this->weightLimit;
	}

                            }





        
 

