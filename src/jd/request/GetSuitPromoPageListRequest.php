<?php

namespace JdJos\jd\request;
class GetSuitPromoPageListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getSuitPromoPageList";
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
    private  $promoQueryVO;

    public function setPromoQueryVO($promoQueryVO){
        $this->apiParas['promoQueryVO'] = $promoQueryVO;
    }
    public function getPromoQueryVO(){
        return $this->apiParas['promoQueryVO'];
    }
    private  $clientInfo;

    public function setClientInfo($clientInfo){
        $this->apiParas['clientInfo'] = $clientInfo;
    }
    public function getClientInfo(){
        return $this->apiParas['clientInfo'];
    }
}

?>