<?php

namespace JdJos\jd\request;
class PopPromoCouponCreateCouponRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.promo.coupon.createCoupon";
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
    private  $clientInfo;

    public function setClientInfo($clientInfo){
        $this->apiParas['clientInfo'] = $clientInfo;
    }
    public function getClientInfo(){
        return $this->apiParas['clientInfo'];
    }
    private  $couponOuterParam;

    public function setCouponOuterParam($couponOuterParam){
        $this->apiParas['couponOuterParam'] = $couponOuterParam;
    }
    public function getCouponOuterParam(){
        return $this->apiParas['couponOuterParam'];
    }
}

?>