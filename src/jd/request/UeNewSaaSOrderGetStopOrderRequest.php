<?php

namespace JdJos\jd\request;
class UeNewSaaSOrderGetStopOrderRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.newSaaSOrder.getStopOrder";
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
                                                        		                                    	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $ivs;
    	                        
	public function setIvs($ivs){
		$this->ivs = $ivs;
         $this->apiParas["ivs"] = $ivs;
	}

	public function getIvs(){
	  return $this->ivs;
	}

                            }





        
 

