<?php

namespace JdJos\jd\request;
class Jd3csSparepartDeliverinfoQueryDeliverInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jd3cs.sparepart.deliverinfo.queryDeliverInfo";
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
    private  $param;

    public function setParam($param){
        $this->apiParas['param'] = $param;
    }
    public function getParam(){
        return $this->apiParas['param'];
    }
}

?>