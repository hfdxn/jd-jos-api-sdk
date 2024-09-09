<?php

namespace JdJos\jd\request;
class HealthcareBatchPushGoodsStoreRelRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.healthcare.batchPushGoodsStoreRel";
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
    private  $batchGoodsStoreRel;

    public function setBatchGoodsStoreRel($batchGoodsStoreRel){
        $this->apiParas['batchGoodsStoreRel'] = $batchGoodsStoreRel;
    }
    public function getBatchGoodsStoreRel(){
        return $this->apiParas['batchGoodsStoreRel'];
    }
}

?>