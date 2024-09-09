<?php

namespace JdJos\jd\request;
class ProductConfigSdkServiceSetProductConfigRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.productConfigSdkService.setProductConfig";
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
    private  $productConfigReq;

    public function setProductConfigReq($productConfigReq){
        $this->apiParas['productConfigReq'] = $productConfigReq;
    }
    public function getProductConfigReq(){
        return $this->apiParas['productConfigReq'];
    }
}

?>