<?php
class MarketToolCouponApiServiceCouponWriteOuterServiceCloseCouponRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.coupon.api.service.CouponWriteOuterService.closeCoupon";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $couponId;
                              public function setCouponId($couponId ){
                 $this->couponId=$couponId;
                 $this->apiParas["couponId"] = $couponId;
              }

              public function getCouponId(){
              	return $this->couponId;
              }
                                                                                                                                        	                        	                                            		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                    	                        	}





        
 

