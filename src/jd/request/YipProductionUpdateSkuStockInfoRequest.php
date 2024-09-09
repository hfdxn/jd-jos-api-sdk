<?php

namespace JdJos\jd\request;
class YipProductionUpdateSkuStockInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.updateSkuStockInfo";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $stockNum;
                              public function setStockNum($stockNum ){
                 $this->stockNum=$stockNum;
                 $this->apiParas["stockNum"] = $stockNum;
              }

              public function getStockNum(){
              	return $this->stockNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                        	                   			private $localeStr;
    	                        
	public function setLocaleStr($localeStr){
		$this->localeStr = $localeStr;
         $this->apiParas["localeStr"] = $localeStr;
	}

	public function getLocaleStr(){
	  return $this->localeStr;
	}

                        	                   			private $loginName;
    	                        
	public function setLoginName($loginName){
		$this->loginName = $loginName;
         $this->apiParas["loginName"] = $loginName;
	}

	public function getLoginName(){
	  return $this->loginName;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                            }





        
 

