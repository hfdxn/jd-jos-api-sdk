<?php

namespace JdJos\jd\request;
class PopMarketingGatewaySignRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.sign";
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
                                                        		                                    	                        	                        	                        	                   			private $signType;
    	                        
	public function setSignType($signType){
		$this->signType = $signType;
         $this->apiParas["signType"] = $signType;
	}

	public function getSignType(){
	  return $this->signType;
	}

                        	                   			private $protocolType;
    	                        
	public function setProtocolType($protocolType){
		$this->protocolType = $protocolType;
         $this->apiParas["protocolType"] = $protocolType;
	}

	public function getProtocolType(){
	  return $this->protocolType;
	}

                        	                        	                        	                            }





        
 

