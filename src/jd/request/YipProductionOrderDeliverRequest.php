<?php
class YipProductionOrderDeliverRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.orderDeliver";
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
                                                        		                                    	                   			private $carrierName;
    	                        
	public function setCarrierName($carrierName){
		$this->carrierName = $carrierName;
         $this->apiParas["carrierName"] = $carrierName;
	}

	public function getCarrierName(){
	  return $this->carrierName;
	}

                        	                   			private $shipNo;
    	                        
	public function setShipNo($shipNo){
		$this->shipNo = $shipNo;
         $this->apiParas["shipNo"] = $shipNo;
	}

	public function getShipNo(){
	  return $this->shipNo;
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

                        	                   			private $guaranteeAmount;
    	                        
	public function setGuaranteeAmount($guaranteeAmount){
		$this->guaranteeAmount = $guaranteeAmount;
         $this->apiParas["guaranteeAmount"] = $guaranteeAmount;
	}

	public function getGuaranteeAmount(){
	  return $this->guaranteeAmount;
	}

                        	                   			private $carrierId;
    	                        
	public function setCarrierId($carrierId){
		$this->carrierId = $carrierId;
         $this->apiParas["carrierId"] = $carrierId;
	}

	public function getCarrierId(){
	  return $this->carrierId;
	}

                        	                   			private $packageNum;
    	                        
	public function setPackageNum($packageNum){
		$this->packageNum = $packageNum;
         $this->apiParas["packageNum"] = $packageNum;
	}

	public function getPackageNum(){
	  return $this->packageNum;
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





        
 

