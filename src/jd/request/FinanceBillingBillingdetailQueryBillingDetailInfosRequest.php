<?php

namespace JdJos\jd\request;
class FinanceBillingBillingdetailQueryBillingDetailInfosRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.finance.billing.billingdetail.queryBillingDetailInfos";
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
    private  $queryBillingDetailInfoMo;

    public function setQueryBillingDetailInfoMo($queryBillingDetailInfoMo){
        $this->apiParas['queryBillingDetailInfoMo'] = $queryBillingDetailInfoMo;
    }
    public function getQueryBillingDetailInfoMo(){
        return $this->apiParas['queryBillingDetailInfoMo'];
    }
}

?>