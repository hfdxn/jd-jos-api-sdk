<?php

namespace JdJos\jd\request;
class RetailWareTextMaterialBatchaddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.retail.ware.text.material.batchadd";
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
    private  $josClient;

    public function setJosClient($josClient){
        $this->apiParas['josClient'] = $josClient;
    }
    public function getJosClient(){
        return $this->apiParas['josClient'];
    }
    private  $shortTitleSellerInfo;

    public function setShortTitleSellerInfo($shortTitleSellerInfo){
        $this->apiParas['shortTitleSellerInfo'] = $shortTitleSellerInfo;
    }
    public function getShortTitleSellerInfo(){
        return $this->apiParas['shortTitleSellerInfo'];
    }
}

?>