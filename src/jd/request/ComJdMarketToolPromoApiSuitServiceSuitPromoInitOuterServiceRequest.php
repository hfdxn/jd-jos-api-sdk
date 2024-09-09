<?php

namespace JdJos\jd\request;
class ComJdMarketToolPromoApiSuitServiceSuitPromoInitOuterServiceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.market.tool.promo.api.suit.service.SuitPromoInitOuterService";
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
    private  $suitPromoInitQueryVO;

    public function setSuitPromoInitQueryVO($suitPromoInitQueryVO){
        $this->apiParas['suitPromoInitQueryVO'] = $suitPromoInitQueryVO;
    }
    public function getSuitPromoInitQueryVO(){
        return $this->apiParas['suitPromoInitQueryVO'];
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