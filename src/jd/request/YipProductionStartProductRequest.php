<?php
class YipProductionStartProductRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.startProduct";
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

                        	                   			private $coId;
    	                        
	public function setCoId($coId){
		$this->coId = $coId;
         $this->apiParas["coId"] = $coId;
	}

	public function getCoId(){
	  return $this->coId;
	}

                        	                   			private $addressId;
    	                        
	public function setAddressId($addressId){
		$this->addressId = $addressId;
         $this->apiParas["addressId"] = $addressId;
	}

	public function getAddressId(){
	  return $this->addressId;
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





        
 

