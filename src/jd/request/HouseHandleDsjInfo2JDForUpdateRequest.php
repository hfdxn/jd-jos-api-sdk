<?php

namespace JdJos\jd\request;
class HouseHandleDsjInfo2JDForUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.house.handleDsjInfo2JDForUpdate";
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
                                    	                   			private $productInfo;
    	                        
	public function setProductInfo($productInfo){
		$this->productInfo = $productInfo;
         $this->apiParas["productInfo"] = $productInfo;
	}

	public function getProductInfo(){
	  return $this->productInfo;
	}

                        	}





        
 

