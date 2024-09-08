<?php
class ImportSkuRelationRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.importSkuRelation";
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
                                                        		                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $authkey;
    	                        
	public function setAuthkey($authkey){
		$this->authkey = $authkey;
         $this->apiParas["authkey"] = $authkey;
	}

	public function getAuthkey(){
	  return $this->authkey;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $skuName;
                              public function setSkuName($skuName ){
                 $this->skuName=$skuName;
                 $this->apiParas["skuName"] = $skuName;
              }

              public function getSkuName(){
              	return $this->skuName;
              }
                                                                                                                                                                                                                                                                                                                       private $settlementType;
                              public function setSettlementType($settlementType ){
                 $this->settlementType=$settlementType;
                 $this->apiParas["settlementType"] = $settlementType;
              }

              public function getSettlementType(){
              	return $this->settlementType;
              }
                                                                                                                                                                                                                                                                                                                       private $venderSkuName;
                              public function setVenderSkuName($venderSkuName ){
                 $this->venderSkuName=$venderSkuName;
                 $this->apiParas["venderSkuName"] = $venderSkuName;
              }

              public function getVenderSkuName(){
              	return $this->venderSkuName;
              }
                                                                                                                                                                                                                                                                                                                       private $venderSkuId;
                              public function setVenderSkuId($venderSkuId ){
                 $this->venderSkuId=$venderSkuId;
                 $this->apiParas["venderSkuId"] = $venderSkuId;
              }

              public function getVenderSkuId(){
              	return $this->venderSkuId;
              }
                                                                                                                                                                                                                                                                                                                       private $salePrice;
                              public function setSalePrice($salePrice ){
                 $this->salePrice=$salePrice;
                 $this->apiParas["salePrice"] = $salePrice;
              }

              public function getSalePrice(){
              	return $this->salePrice;
              }
                                                                                                                                                                                                                                                                                                                       private $upc;
                              public function setUpc($upc ){
                 $this->upc=$upc;
                 $this->apiParas["upc"] = $upc;
              }

              public function getUpc(){
              	return $this->upc;
              }
                                                                                                                                                                                                                                                                                                                       private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                                                                                                                                                                                                       private $checkSn;
                              public function setCheckSn($checkSn ){
                 $this->checkSn=$checkSn;
                 $this->apiParas["checkSn"] = $checkSn;
              }

              public function getCheckSn(){
              	return $this->checkSn;
              }
                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                       private $skuProperty;
                              public function setSkuProperty($skuProperty ){
                 $this->skuProperty=$skuProperty;
                 $this->apiParas["skuProperty"] = $skuProperty;
              }

              public function getSkuProperty(){
              	return $this->skuProperty;
              }
                                                                                                                                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                        	                   			private $xidBuyer;
    	                                                            
	public function setXidBuyer($xidBuyer){
		$this->xidBuyer = $xidBuyer;
         $this->apiParas["xid_buyer"] = $xidBuyer;
	}

	public function getXidBuyer(){
	  return $this->xidBuyer;
	}

                            }





        
 

