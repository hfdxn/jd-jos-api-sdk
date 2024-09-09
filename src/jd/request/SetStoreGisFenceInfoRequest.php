<?php

namespace JdJos\jd\request;
class SetStoreGisFenceInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.setStoreGisFenceInfo";
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
                                                        		                                    	                        	                   			private $kilometres;
    	                        
	public function setKilometres($kilometres){
		$this->kilometres = $kilometres;
         $this->apiParas["kilometres"] = $kilometres;
	}

	public function getKilometres(){
	  return $this->kilometres;
	}

                        	                   			private $vertexs;
    	                        
	public function setVertexs($vertexs){
		$this->vertexs = $vertexs;
         $this->apiParas["vertexs"] = $vertexs;
	}

	public function getVertexs(){
	  return $this->vertexs;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                            }





        
 

