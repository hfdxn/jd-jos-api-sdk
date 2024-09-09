<?php

namespace JdJos\jd\request;
class SelfOperationShopSearchApiServiceSearchRecomJsfServiceDeleteRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.self.operation.shop.search.api.service.SearchRecomJsfService.delete";
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
                                                        		                                    	                        	                        	                   			private $recomId;
    	                        
	public function setRecomId($recomId){
		$this->recomId = $recomId;
         $this->apiParas["recomId"] = $recomId;
	}

	public function getRecomId(){
	  return $this->recomId;
	}

                        	                        	                            }





        
 

