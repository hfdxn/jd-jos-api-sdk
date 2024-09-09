<?php

namespace JdJos\jd\request;
class YipCustomizedCancelCustomServiceApplyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.customized.cancelCustomServiceApply";
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
    private  $skuServiceCancelApplyVo;

    public function setSkuServiceCancelApplyVo($skuServiceCancelApplyVo){
        $this->apiParas['skuServiceCancelApplyVo'] = $skuServiceCancelApplyVo;
    }
    public function getSkuServiceCancelApplyVo(){
        return $this->apiParas['skuServiceCancelApplyVo'];
    }
}

?>