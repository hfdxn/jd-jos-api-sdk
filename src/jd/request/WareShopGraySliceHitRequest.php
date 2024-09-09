<?php

namespace JdJos\jd\request;
class WareShopGraySliceHitRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.shop.gray.slice.hit";
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
                                                        		                                    	                        	                        	                        	                                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $grayKey;
                              public function setGrayKey($grayKey ){
                 $this->grayKey=$grayKey;
                 $this->apiParas["grayKey"] = $grayKey;
              }

              public function getGrayKey(){
              	return $this->grayKey;
              }
                                                                                                                                            }





        
 

