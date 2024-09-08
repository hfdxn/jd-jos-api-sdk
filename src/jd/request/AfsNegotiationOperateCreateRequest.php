<?php
class AfsNegotiationOperateCreateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afs.negotiation.operate.create";
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
                                                        		                                                        		                                    	                   			private $negotiationReason;
    	                        
	public function setNegotiationReason($negotiationReason){
		$this->negotiationReason = $negotiationReason;
         $this->apiParas["negotiationReason"] = $negotiationReason;
	}

	public function getNegotiationReason(){
	  return $this->negotiationReason;
	}

                        	                        	                        	                   			private $refId;
    	                        
	public function setRefId($refId){
		$this->refId = $refId;
         $this->apiParas["refId"] = $refId;
	}

	public function getRefId(){
	  return $this->refId;
	}

                        	                   			private $negotiationPurpose;
    	                        
	public function setNegotiationPurpose($negotiationPurpose){
		$this->negotiationPurpose = $negotiationPurpose;
         $this->apiParas["negotiationPurpose"] = $negotiationPurpose;
	}

	public function getNegotiationPurpose(){
	  return $this->negotiationPurpose;
	}

                                            		                                    	                   			private $newCustomerExpect;
    	                        
	public function setNewCustomerExpect($newCustomerExpect){
		$this->newCustomerExpect = $newCustomerExpect;
         $this->apiParas["newCustomerExpect"] = $newCustomerExpect;
	}

	public function getNewCustomerExpect(){
	  return $this->newCustomerExpect;
	}

                        	                   			private $newAfsReasons;
    	                        
	public function setNewAfsReasons($newAfsReasons){
		$this->newAfsReasons = $newAfsReasons;
         $this->apiParas["newAfsReasons"] = $newAfsReasons;
	}

	public function getNewAfsReasons(){
	  return $this->newAfsReasons;
	}

                        	                   			private $newAfsReasonId;
    	                        
	public function setNewAfsReasonId($newAfsReasonId){
		$this->newAfsReasonId = $newAfsReasonId;
         $this->apiParas["newAfsReasonId"] = $newAfsReasonId;
	}

	public function getNewAfsReasonId(){
	  return $this->newAfsReasonId;
	}

                        	                   			private $newRefundMoney;
    	                        
	public function setNewRefundMoney($newRefundMoney){
		$this->newRefundMoney = $newRefundMoney;
         $this->apiParas["newRefundMoney"] = $newRefundMoney;
	}

	public function getNewRefundMoney(){
	  return $this->newRefundMoney;
	}

                                            		                                    	                   			private $contactsName;
    	                        
	public function setContactsName($contactsName){
		$this->contactsName = $contactsName;
         $this->apiParas["contactsName"] = $contactsName;
	}

	public function getContactsName(){
	  return $this->contactsName;
	}

                        	                   			private $contactsPhone;
    	                        
	public function setContactsPhone($contactsPhone){
		$this->contactsPhone = $contactsPhone;
         $this->apiParas["contactsPhone"] = $contactsPhone;
	}

	public function getContactsPhone(){
	  return $this->contactsPhone;
	}

                        	                   			private $contactsTel;
    	                        
	public function setContactsTel($contactsTel){
		$this->contactsTel = $contactsTel;
         $this->apiParas["contactsTel"] = $contactsTel;
	}

	public function getContactsTel(){
	  return $this->contactsTel;
	}

                        	                   			private $contactsZipCode;
    	                        
	public function setContactsZipCode($contactsZipCode){
		$this->contactsZipCode = $contactsZipCode;
         $this->apiParas["contactsZipCode"] = $contactsZipCode;
	}

	public function getContactsZipCode(){
	  return $this->contactsZipCode;
	}

                                            		                                    	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $village;
    	                        
	public function setVillage($village){
		$this->village = $village;
         $this->apiParas["village"] = $village;
	}

	public function getVillage(){
	  return $this->village;
	}

                        	                   			private $detailAddress;
    	                        
	public function setDetailAddress($detailAddress){
		$this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress(){
	  return $this->detailAddress;
	}

                                                                                                                                		                                    	                   			private $communicationFlag;
    	                        
	public function setCommunicationFlag($communicationFlag){
		$this->communicationFlag = $communicationFlag;
         $this->apiParas["communicationFlag"] = $communicationFlag;
	}

	public function getCommunicationFlag(){
	  return $this->communicationFlag;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $communicateChannelsItem;
                              public function setCommunicateChannelsItem($communicateChannelsItem ){
                 $this->communicateChannelsItem=$communicateChannelsItem;
                 $this->apiParas["communicateChannelsItem"] = $communicateChannelsItem;
              }

              public function getCommunicateChannelsItem(){
              	return $this->communicateChannelsItem;
              }
                                                                                                                                        	                   			private $negotiationProgramme;
    	                        
	public function setNegotiationProgramme($negotiationProgramme){
		$this->negotiationProgramme = $negotiationProgramme;
         $this->apiParas["negotiationProgramme"] = $negotiationProgramme;
	}

	public function getNegotiationProgramme(){
	  return $this->negotiationProgramme;
	}

                        	                   			private $negotiationProgrammeDesc;
    	                        
	public function setNegotiationProgrammeDesc($negotiationProgrammeDesc){
		$this->negotiationProgrammeDesc = $negotiationProgrammeDesc;
         $this->apiParas["negotiationProgrammeDesc"] = $negotiationProgrammeDesc;
	}

	public function getNegotiationProgrammeDesc(){
	  return $this->negotiationProgrammeDesc;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $negotiationImagesItem;
                              public function setNegotiationImagesItem($negotiationImagesItem ){
                 $this->negotiationImagesItem=$negotiationImagesItem;
                 $this->apiParas["negotiationImagesItem"] = $negotiationImagesItem;
              }

              public function getNegotiationImagesItem(){
              	return $this->negotiationImagesItem;
              }
                                                                                                                                        	                   			private $rejectReason;
    	                        
	public function setRejectReason($rejectReason){
		$this->rejectReason = $rejectReason;
         $this->apiParas["rejectReason"] = $rejectReason;
	}

	public function getRejectReason(){
	  return $this->rejectReason;
	}

                                                    	                                            		                                    	                   			private $refundCloseReason;
    	                        
	public function setRefundCloseReason($refundCloseReason){
		$this->refundCloseReason = $refundCloseReason;
         $this->apiParas["refundCloseReason"] = $refundCloseReason;
	}

	public function getRefundCloseReason(){
	  return $this->refundCloseReason;
	}

                                                                        		                                    	                   			private $refundReverseReason;
    	                        
	public function setRefundReverseReason($refundReverseReason){
		$this->refundReverseReason = $refundReverseReason;
         $this->apiParas["refundReverseReason"] = $refundReverseReason;
	}

	public function getRefundReverseReason(){
	  return $this->refundReverseReason;
	}

                        	                   			private $refundAddressId;
    	                        
	public function setRefundAddressId($refundAddressId){
		$this->refundAddressId = $refundAddressId;
         $this->apiParas["refundAddressId"] = $refundAddressId;
	}

	public function getRefundAddressId(){
	  return $this->refundAddressId;
	}

                                                    	                        	                                                        }





        
 

