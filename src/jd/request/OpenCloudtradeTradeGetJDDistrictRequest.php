<?php

namespace JdJos\jd\request;
class OpenCloudtradeTradeGetJDDistrictRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.open.cloudtrade.trade.getJDDistrict";
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
                                    	                   			private $fullAddress;
    	                        
	public function setFullAddress($fullAddress){
		$this->fullAddress = $fullAddress;
         $this->apiParas["fullAddress"] = $fullAddress;
	}

	public function getFullAddress(){
	  return $this->fullAddress;
	}

}





        
 

