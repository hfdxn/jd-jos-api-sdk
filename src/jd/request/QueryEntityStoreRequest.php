<?php

namespace JdJos\jd\request;
class QueryEntityStoreRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryEntityStore";
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
    private  $paramVenderStoresBea;

    public function setParamVenderStoresBea($paramVenderStoresBea){
        $this->apiParas['paramVenderStoresBea'] = $paramVenderStoresBea;
    }
    public function getParamVenderStoresBea(){
        return $this->apiParas['paramVenderStoresBea'];
    }
}

?>