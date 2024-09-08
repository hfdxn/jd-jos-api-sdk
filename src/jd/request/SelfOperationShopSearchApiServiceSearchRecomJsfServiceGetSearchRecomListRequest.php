<?php
class SelfOperationShopSearchApiServiceSearchRecomJsfServiceGetSearchRecomListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.self.operation.shop.search.api.service.SearchRecomJsfService.getSearchRecomList";
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
                                                        		                                    	                                            		                                    	                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                                                        }





        
 

