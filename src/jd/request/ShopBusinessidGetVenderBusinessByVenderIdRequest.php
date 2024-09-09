<?php

namespace JdJos\jd\request;
class ShopBusinessidGetVenderBusinessByVenderIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.shop.businessid.getVenderBusinessByVenderId";
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
    private  $i18nParam;

    public function setI18nParam($i18nParam){
        $this->apiParas['i18nParam'] = $i18nParam;
    }
    public function getI18nParam(){
        return $this->apiParas['i18nParam'];
    }
}

?>