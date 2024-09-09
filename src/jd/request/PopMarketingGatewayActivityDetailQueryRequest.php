<?php

namespace JdJos\jd\request;
class PopMarketingGatewayActivityDetailQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.activity.detail.query";
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

                        	                        	                        	                            }





        
 

