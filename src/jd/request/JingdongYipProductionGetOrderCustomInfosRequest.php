<?php

namespace JdJos\jd\request;
class JingdongYipProductionGetOrderCustomInfosRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jingdong.yip.production.getOrderCustomInfos";
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
    private  $query;

    public function setQuery($query){
        $this->apiParas['query'] = $query;
    }
    public function getQuery(){
        return $this->apiParas['query'];
    }
    private  $venderId;

    public function setVenderId($venderId){
        $this->apiParas['venderId'] = $venderId;
    }
    public function getVenderId(){
        return $this->apiParas['venderId'];
    }
}

?>