<?php
class JdhO2oStoreClientQueryStorePageDetailDataRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jdh.o2o.StoreClient.queryStorePageDetailData";
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
    private  $storeDetailPageRequest;

    public function setStoreDetailPageRequest($storeDetailPageRequest){
        $this->apiParas['storeDetailPageRequest'] = $storeDetailPageRequest;
    }
    public function getStoreDetailPageRequest(){
        return $this->apiParas['storeDetailPageRequest'];
    }
}

?>