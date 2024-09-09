<?php

namespace JdJos\jd\request;
class WareSeriesProductRelationDeleteRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.series.productRelation.delete";
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
                                                        		                                    	                        	                        	                        	                        	                                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $productId;
                              public function setProductId($productId ){
                 $this->productId=$productId;
                 $this->apiParas["productId"] = $productId;
              }

              public function getProductId(){
              	return $this->productId;
              }
                                                                                                                                        	                   			private $seriesProductId;
    	                        
	public function setSeriesProductId($seriesProductId){
		$this->seriesProductId = $seriesProductId;
         $this->apiParas["seriesProductId"] = $seriesProductId;
	}

	public function getSeriesProductId(){
	  return $this->seriesProductId;
	}

                            }





        
 

