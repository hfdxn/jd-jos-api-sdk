<?php

namespace JdJos\jd\request;
class JdhO2oStoreClientBatchQueryStorePOIsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jdh.o2o.StoreClient.batchQueryStorePOIs";
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
    private  $storePOIRequest;

    public function setStorePOIRequest($storePOIRequest){
        $this->apiParas['storePOIRequest'] = $storePOIRequest;
    }
    public function getStorePOIRequest(){
        return $this->apiParas['storePOIRequest'];
    }
}

?>