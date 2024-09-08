<?php
class WeighingSaleOrderUpsertRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.weighing.sale.order.upsert";
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
                                                        		                                                        		                                                        		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                                                                                	                        	                                                                        		                                    	                   			private $nsspId;
    	                        
	public function setNsspId($nsspId){
		$this->nsspId = $nsspId;
         $this->apiParas["nsspId"] = $nsspId;
	}

	public function getNsspId(){
	  return $this->nsspId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $weightUuid;
                              public function setWeightUuid($weightUuid ){
                 $this->weightUuid=$weightUuid;
                 $this->apiParas["weightUuid"] = $weightUuid;
              }

              public function getWeightUuid(){
              	return $this->weightUuid;
              }
                                                                                                                                                                                                                                                                                                                       private $actionType;
                              public function setActionType($actionType ){
                 $this->actionType=$actionType;
                 $this->apiParas["actionType"] = $actionType;
              }

              public function getActionType(){
              	return $this->actionType;
              }
                                                                                                                                                                                                                                                                                                                       private $orignalNum;
                              public function setOrignalNum($orignalNum ){
                 $this->orignalNum=$orignalNum;
                 $this->apiParas["orignalNum"] = $orignalNum;
              }

              public function getOrignalNum(){
              	return $this->orignalNum;
              }
                                                                                                                                                                                                                                                                                                                       private $skuUuid;
                              public function setSkuUuid($skuUuid ){
                 $this->skuUuid=$skuUuid;
                 $this->apiParas["skuUuid"] = $skuUuid;
              }

              public function getSkuUuid(){
              	return $this->skuUuid;
              }
                                                                                                                                                                                                                                                                                                                       private $actualNum;
                              public function setActualNum($actualNum ){
                 $this->actualNum=$actualNum;
                 $this->apiParas["actualNum"] = $actualNum;
              }

              public function getActualNum(){
              	return $this->actualNum;
              }
                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                       private $skuNum;
                              public function setSkuNum($skuNum ){
                 $this->skuNum=$skuNum;
                 $this->apiParas["skuNum"] = $skuNum;
              }

              public function getSkuNum(){
              	return $this->skuNum;
              }
                                                                                                                                        	                   			private $loginPerson;
    	                        
	public function setLoginPerson($loginPerson){
		$this->loginPerson = $loginPerson;
         $this->apiParas["loginPerson"] = $loginPerson;
	}

	public function getLoginPerson(){
	  return $this->loginPerson;
	}

                        	                   			private $buyerPin;
    	                        
	public function setBuyerPin($buyerPin){
		$this->buyerPin = $buyerPin;
         $this->apiParas["buyerPin"] = $buyerPin;
	}

	public function getBuyerPin(){
	  return $this->buyerPin;
	}

                        	                   			private $jdOrderId;
    	                        
	public function setJdOrderId($jdOrderId){
		$this->jdOrderId = $jdOrderId;
         $this->apiParas["jdOrderId"] = $jdOrderId;
	}

	public function getJdOrderId(){
	  return $this->jdOrderId;
	}

                        	                        	                   			private $nsspSource;
    	                        
	public function setNsspSource($nsspSource){
		$this->nsspSource = $nsspSource;
         $this->apiParas["nsspSource"] = $nsspSource;
	}

	public function getNsspSource(){
	  return $this->nsspSource;
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





        
 

