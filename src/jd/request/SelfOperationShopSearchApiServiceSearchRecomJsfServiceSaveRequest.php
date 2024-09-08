<?php
class SelfOperationShopSearchApiServiceSearchRecomJsfServiceSaveRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.self.operation.shop.search.api.service.SearchRecomJsfService.save";
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
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
    private  $searchRecomVos;

    public function setSearchRecomVos($searchRecomVos){
        $this->apiParas['searchRecomVos'] = $searchRecomVos;
    }
    public function getSearchRecomVos(){
        return $this->apiParas['searchRecomVos'];
    }
}

?>