<?php

namespace JdJos\jd\request;
class WareSeriesObjectGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.series.object.get";
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
                                                        		                                    	                        	                        	                        	                        	                                                    	                   			private $seriesProductId;
    	                        
	public function setSeriesProductId($seriesProductId){
		$this->seriesProductId = $seriesProductId;
         $this->apiParas["seriesProductId"] = $seriesProductId;
	}

	public function getSeriesProductId(){
	  return $this->seriesProductId;
	}

}





        
 

