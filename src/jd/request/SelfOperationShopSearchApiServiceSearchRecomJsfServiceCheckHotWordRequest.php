<?php
class SelfOperationShopSearchApiServiceSearchRecomJsfServiceCheckHotWordRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.self.operation.shop.search.api.service.SearchRecomJsfService.checkHotWord";
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
                                    	                   			private $hotWord;
    	                        
	public function setHotWord($hotWord){
		$this->hotWord = $hotWord;
         $this->apiParas["hotWord"] = $hotWord;
	}

	public function getHotWord(){
	  return $this->hotWord;
	}

}





        
 

