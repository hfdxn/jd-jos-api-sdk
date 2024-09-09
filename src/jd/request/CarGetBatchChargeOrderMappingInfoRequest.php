<?php

namespace JdJos\jd\request;
class CarGetBatchChargeOrderMappingInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.car.getBatchChargeOrderMappingInfo";
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
    private  $venderId;

    public function setVenderId($venderId){
        $this->apiParas['venderId'] = $venderId;
    }
    public function getVenderId(){
        return $this->apiParas['venderId'];
    }
    private  $startChargeSeqList;

    public function setStartChargeSeqList($startChargeSeqList){
        $this->apiParas['startChargeSeqList'] = $startChargeSeqList;
    }
    public function getStartChargeSeqList(){
        return $this->apiParas['startChargeSeqList'];
    }
}

?>