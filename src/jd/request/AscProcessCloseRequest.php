<?php
class AscProcessCloseRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.process.close";
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

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $sysVersion;
    	                        
	public function setSysVersion($sysVersion){
		$this->sysVersion = $sysVersion;
         $this->apiParas["sysVersion"] = $sysVersion;
	}

	public function getSysVersion(){
	  return $this->sysVersion;
	}

                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                        	                   			private $refuseReason;
    	                        
	public function setRefuseReason($refuseReason){
		$this->refuseReason = $refuseReason;
         $this->apiParas["refuseReason"] = $refuseReason;
	}

	public function getRefuseReason(){
	  return $this->refuseReason;
	}

                        	                   			private $refuseReasonName;
    	                        
	public function setRefuseReasonName($refuseReasonName){
		$this->refuseReasonName = $refuseReasonName;
         $this->apiParas["refuseReasonName"] = $refuseReasonName;
	}

	public function getRefuseReasonName(){
	  return $this->refuseReasonName;
	}

                        	                   			private $refuseRemark;
    	                        
	public function setRefuseRemark($refuseRemark){
		$this->refuseRemark = $refuseRemark;
         $this->apiParas["refuseRemark"] = $refuseRemark;
	}

	public function getRefuseRemark(){
	  return $this->refuseRemark;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $refuseImageName;
                              public function setRefuseImageName($refuseImageName ){
                 $this->refuseImageName=$refuseImageName;
                 $this->apiParas["refuseImageName"] = $refuseImageName;
              }

              public function getRefuseImageName(){
              	return $this->refuseImageName;
              }
                                                                                                                                                                                                                                                                                                                       private $refuseImageUrl;
                              public function setRefuseImageUrl($refuseImageUrl ){
                 $this->refuseImageUrl=$refuseImageUrl;
                 $this->apiParas["refuseImageUrl"] = $refuseImageUrl;
              }

              public function getRefuseImageUrl(){
              	return $this->refuseImageUrl;
              }
                                                                                                                                            }





        
 

