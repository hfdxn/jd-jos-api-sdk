<?php

namespace JdJos\jd\request;
class VenderVbinfoGetBasicVenderInfoByVenderIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.vbinfo.getBasicVenderInfoByVenderId";
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
                                    	                        	                   	                    		private $colNames;
    	                        
	public function setColNames($colNames){
		$this->colNames = $colNames;
         $this->apiParas["colNames"] = $colNames;
	}

	public function getColNames(){
	  return $this->colNames;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

}





        
 

