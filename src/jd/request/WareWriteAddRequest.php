<?php

namespace JdJos\jd\request;
class WareWriteAddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.write.add";
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
    private  $ware;

    public function setWare($ware){
        $this->apiParas['ware'] = $ware;
    }
    public function getWare(){
        return $this->apiParas['ware'];
    }
    private  $skus;

    public function setSkus($skus){
        $this->apiParas['skus'] = $skus;
    }
    public function getSkus(){
        return $this->apiParas['skus'];
    }
}

?>