<?php

namespace JdJos\jd\request;
class PopMarketingGatewaySkuDetailArrayQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.sku.detail.array.query";
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
                                                        		                                    	                        	                        	                        	                   			private $mktActBaseNo;
    	                        
	public function setMktActBaseNo($mktActBaseNo){
		$this->mktActBaseNo = $mktActBaseNo;
         $this->apiParas["mktActBaseNo"] = $mktActBaseNo;
	}

	public function getMktActBaseNo(){
	  return $this->mktActBaseNo;
	}

                        	                   			private $mktSearchType;
    	                        
	public function setMktSearchType($mktSearchType){
		$this->mktSearchType = $mktSearchType;
         $this->apiParas["mktSearchType"] = $mktSearchType;
	}

	public function getMktSearchType(){
	  return $this->mktSearchType;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuIds;
                              public function setSkuIds($skuIds ){
                 $this->skuIds=$skuIds;
                 $this->apiParas["skuIds"] = $skuIds;
              }

              public function getSkuIds(){
              	return $this->skuIds;
              }
                                                                                                                                        	                        	                            }





        
 

