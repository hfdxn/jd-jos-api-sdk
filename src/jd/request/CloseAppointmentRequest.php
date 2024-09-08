<?php
class CloseAppointmentRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.closeAppointment";
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
                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                                        		                                    	                   			private $preSellId;
    	                        
	public function setPreSellId($preSellId){
		$this->preSellId = $preSellId;
         $this->apiParas["preSellId"] = $preSellId;
	}

	public function getPreSellId(){
	  return $this->preSellId;
	}

                        	                   			private $groupType;
    	                        
	public function setGroupType($groupType){
		$this->groupType = $groupType;
         $this->apiParas["groupType"] = $groupType;
	}

	public function getGroupType(){
	  return $this->groupType;
	}

                        	                        	                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                        	                            }





        
 

