<?php
class YipCustomizedBatchQueryCustomServiceApplyResultRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.customized.batchQueryCustomServiceApplyResult";
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
    private  $batchApplyVo;

    public function setBatchApplyVo($batchApplyVo){
        $this->apiParas['batchApplyVo'] = $batchApplyVo;
    }
    public function getBatchApplyVo(){
        return $this->apiParas['batchApplyVo'];
    }
}

?>