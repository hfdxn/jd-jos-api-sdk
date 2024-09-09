<?php

namespace JdJos\jd\request;
class AddSuitPromoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AddSuitPromo";
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
    private  $suitPromoDetailVO;

    public function setSuitPromoDetailVO($suitPromoDetailVO){
        $this->apiParas['suitPromoDetailVO'] = $suitPromoDetailVO;
    }
    public function getSuitPromoDetailVO(){
        return $this->apiParas['suitPromoDetailVO'];
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