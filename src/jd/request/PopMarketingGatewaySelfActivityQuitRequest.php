<?php

namespace JdJos\jd\request;
class PopMarketingGatewaySelfActivityQuitRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.self.activity.quit";
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
                                                        		                                    	                        	                        	                        	                   			private $catGysCode;
    	                        
	public function setCatGysCode($catGysCode){
		$this->catGysCode = $catGysCode;
         $this->apiParas["catGysCode"] = $catGysCode;
	}

	public function getCatGysCode(){
	  return $this->catGysCode;
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





        
 

