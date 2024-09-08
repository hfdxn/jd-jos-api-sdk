<?php
class ComJdMarketToolPromoApiSuitServiceSuitPromoWriteOuterServiceDeleteSuitPromoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.market.tool.promo.api.suit.service.SuitPromoWriteOuterService.deleteSuitPromo";
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
    private  $suitPromoDeleteVO;

    public function setSuitPromoDeleteVO($suitPromoDeleteVO){
        $this->apiParas['suitPromoDeleteVO'] = $suitPromoDeleteVO;
    }
    public function getSuitPromoDeleteVO(){
        return $this->apiParas['suitPromoDeleteVO'];
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