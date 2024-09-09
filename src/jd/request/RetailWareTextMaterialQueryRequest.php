<?php

namespace JdJos\jd\request;
class RetailWareTextMaterialQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.retail.ware.text.material.query";
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
                                                        		                                    	                   			private $callEnd;
    	                        
	public function setCallEnd($callEnd){
		$this->callEnd = $callEnd;
         $this->apiParas["callEnd"] = $callEnd;
	}

	public function getCallEnd(){
	  return $this->callEnd;
	}

                        	                        	                        	                        	                        	                        	                                                                        		                                    	                   	                    		private $needMaterialType;
    	                        
	public function setNeedMaterialType($needMaterialType){
		$this->needMaterialType = $needMaterialType;
         $this->apiParas["needMaterialType"] = $needMaterialType;
	}

	public function getNeedMaterialType(){
	  return $this->needMaterialType;
	}

                        	                   	                    		private $skuIds;
    	                        
	public function setSkuIds($skuIds){
		$this->skuIds = $skuIds;
         $this->apiParas["skuIds"] = $skuIds;
	}

	public function getSkuIds(){
	  return $this->skuIds;
	}

                            }





        
 

