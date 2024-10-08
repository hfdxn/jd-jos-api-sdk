<?php

namespace JdJos\jd\request;
class B2bProductStockGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.product.stock.get";
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
                                    	                   			private $skuNums;
    	                        
	public function setSkuNums($skuNums){
		$this->skuNums = $skuNums;
         $this->apiParas["skuNums"] = $skuNums;
	}

	public function getSkuNums(){
	  return $this->skuNums;
	}

                        	                   			private $area;
    	                        
	public function setArea($area){
		$this->area = $area;
         $this->apiParas["area"] = $area;
	}

	public function getArea(){
	  return $this->area;
	}

                        	}





        
 

