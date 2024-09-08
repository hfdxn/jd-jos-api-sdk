<?php
class ErsFangAddOrUpdateHouseResourceBrokerRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addOrUpdateHouseResourceBroker";
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
                                                        		                                    	                   			private $brokerId;
    	                        
	public function setBrokerId($brokerId){
		$this->brokerId = $brokerId;
         $this->apiParas["brokerId"] = $brokerId;
	}

	public function getBrokerId(){
	  return $this->brokerId;
	}

                        	                   			private $houseResourceId;
    	                        
	public function setHouseResourceId($houseResourceId){
		$this->houseResourceId = $houseResourceId;
         $this->apiParas["houseResourceId"] = $houseResourceId;
	}

	public function getHouseResourceId(){
	  return $this->houseResourceId;
	}

                        	                   			private $quotedPrice;
    	                        
	public function setQuotedPrice($quotedPrice){
		$this->quotedPrice = $quotedPrice;
         $this->apiParas["quotedPrice"] = $quotedPrice;
	}

	public function getQuotedPrice(){
	  return $this->quotedPrice;
	}

                        	                   			private $recommend;
    	                        
	public function setRecommend($recommend){
		$this->recommend = $recommend;
         $this->apiParas["recommend"] = $recommend;
	}

	public function getRecommend(){
	  return $this->recommend;
	}

                        	                   			private $orderNum;
    	                        
	public function setOrderNum($orderNum){
		$this->orderNum = $orderNum;
         $this->apiParas["orderNum"] = $orderNum;
	}

	public function getOrderNum(){
	  return $this->orderNum;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                        	                   			private $brokerType;
    	                        
	public function setBrokerType($brokerType){
		$this->brokerType = $brokerType;
         $this->apiParas["brokerType"] = $brokerType;
	}

	public function getBrokerType(){
	  return $this->brokerType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $brokerIdList;
                              public function setBrokerIdList($brokerIdList ){
                 $this->brokerIdList=$brokerIdList;
                 $this->apiParas["brokerIdList"] = $brokerIdList;
              }

              public function getBrokerIdList(){
              	return $this->brokerIdList;
              }
                                                                                                                                                                                                                                                                                                                                              private $quotedPriceList;
                              public function setQuotedPriceList($quotedPriceList ){
                 $this->quotedPriceList=$quotedPriceList;
                 $this->apiParas["quotedPriceList"] = $quotedPriceList;
              }

              public function getQuotedPriceList(){
              	return $this->quotedPriceList;
              }
                                                                                                                                                                                                                                                                                                                                              private $recommendList;
                              public function setRecommendList($recommendList ){
                 $this->recommendList=$recommendList;
                 $this->apiParas["recommendList"] = $recommendList;
              }

              public function getRecommendList(){
              	return $this->recommendList;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderNumList;
                              public function setOrderNumList($orderNumList ){
                 $this->orderNumList=$orderNumList;
                 $this->apiParas["orderNumList"] = $orderNumList;
              }

              public function getOrderNumList(){
              	return $this->orderNumList;
              }
                                                                                                                                                                                                                                                                                                                                              private $brokerTypeList;
                              public function setBrokerTypeList($brokerTypeList ){
                 $this->brokerTypeList=$brokerTypeList;
                 $this->apiParas["brokerTypeList"] = $brokerTypeList;
              }

              public function getBrokerTypeList(){
              	return $this->brokerTypeList;
              }
                                                                                                                                                                                                                                                                                                                                              private $cityCodeList;
                              public function setCityCodeList($cityCodeList ){
                 $this->cityCodeList=$cityCodeList;
                 $this->apiParas["cityCodeList"] = $cityCodeList;
              }

              public function getCityCodeList(){
              	return $this->cityCodeList;
              }
                                                                                                                                                                                                                                                                                                                                              private $sourceIdLsit;
                              public function setSourceIdLsit($sourceIdLsit ){
                 $this->sourceIdLsit=$sourceIdLsit;
                 $this->apiParas["sourceIdLsit"] = $sourceIdLsit;
              }

              public function getSourceIdLsit(){
              	return $this->sourceIdLsit;
              }
                                                                                                                                                                                                                                                                                                                                              private $venderIdList;
                              public function setVenderIdList($venderIdList ){
                 $this->venderIdList=$venderIdList;
                 $this->apiParas["venderIdList"] = $venderIdList;
              }

              public function getVenderIdList(){
              	return $this->venderIdList;
              }
                                                                                                                                            }





        
 

