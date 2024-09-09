<?php

namespace JdJos\jd\request;
class MarketToolPresaleQueryDetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.presale.query.detail";
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
                                                        		                                    	                                                                        		                                    	                        	                   			private $presaleId;
    	                        
	public function setPresaleId($presaleId){
		$this->presaleId = $presaleId;
         $this->apiParas["presaleId"] = $presaleId;
	}

	public function getPresaleId(){
	  return $this->presaleId;
	}

                            }





        
 

