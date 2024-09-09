<?php

namespace JdJos\jd\request;
class MarketToolPresaleCreateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.presale.create";
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
    private  $presaleInfo;

    public function setPresaleInfo($presaleInfo){
        $this->apiParas['presaleInfo'] = $presaleInfo;
    }
    public function getPresaleInfo(){
        return $this->apiParas['presaleInfo'];
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