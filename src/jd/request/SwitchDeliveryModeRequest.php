<?php
class SwitchDeliveryModeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.switchDeliveryMode";
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

                        	                   			private $value;
    	                        
	public function setValue($value){
		$this->value = $value;
         $this->apiParas["value"] = $value;
	}

	public function getValue(){
	  return $this->value;
	}

                            }





        
 

