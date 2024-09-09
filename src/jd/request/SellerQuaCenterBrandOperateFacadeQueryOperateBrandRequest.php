<?php

namespace JdJos\jd\request;
class SellerQuaCenterBrandOperateFacadeQueryOperateBrandRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.qua.center.BrandOperateFacade.queryOperateBrand";
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
    private  $brandOperateQuery;

    public function setBrandOperateQuery($brandOperateQuery){
        $this->apiParas['brandOperateQuery'] = $brandOperateQuery;
    }
    public function getBrandOperateQuery(){
        return $this->apiParas['brandOperateQuery'];
    }
    private  $callerParam;

    public function setCallerParam($callerParam){
        $this->apiParas['callerParam'] = $callerParam;
    }
    public function getCallerParam(){
        return $this->apiParas['callerParam'];
    }
}

?>