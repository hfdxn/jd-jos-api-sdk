<?php

namespace JdJos\jd\request;
class PopAfsSoaAfsRefundApplyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.soa.afsRefundApply";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                        private $afsServiceId;
                              public function setAfsServiceId($afsServiceId ){
                 $this->afsServiceId=$afsServiceId;
                 $this->apiParas["afsServiceId"] = $afsServiceId;
              }

              public function getAfsServiceId(){
              	return $this->afsServiceId;
              }
                                                                                                                                                                                                                                                                                                                                              private $processType;
                              public function setProcessType($processType ){
                 $this->processType=$processType;
                 $this->apiParas["processType"] = $processType;
              }

              public function getProcessType(){
              	return $this->processType;
              }
                                                                                                                                                                                                                                                                                                                                              private $source;
                              public function setSource($source ){
                 $this->source=$source;
                 $this->apiParas["source"] = $source;
              }

              public function getSource(){
              	return $this->source;
              }
                                                                                                                                                                                                                                                                                                                                              private $isFreight;
                              public function setIsFreight($isFreight ){
                 $this->isFreight=$isFreight;
                 $this->apiParas["isFreight"] = $isFreight;
              }

              public function getIsFreight(){
              	return $this->isFreight;
              }
                                                                                                                                                                                                                                                                                                                                              private $returnPackFeeFlag;
                              public function setReturnPackFeeFlag($returnPackFeeFlag ){
                 $this->returnPackFeeFlag=$returnPackFeeFlag;
                 $this->apiParas["returnPackFeeFlag"] = $returnPackFeeFlag;
              }

              public function getReturnPackFeeFlag(){
              	return $this->returnPackFeeFlag;
              }
                                                                                                                                                            		                                    	                   			private $businessUnit;
    	                        
	public function setBusinessUnit($businessUnit){
		$this->businessUnit = $businessUnit;
         $this->apiParas["businessUnit"] = $businessUnit;
	}

	public function getBusinessUnit(){
	  return $this->businessUnit;
	}

                        	                   			private $country;
    	                        
	public function setCountry($country){
		$this->country = $country;
         $this->apiParas["country"] = $country;
	}

	public function getCountry(){
	  return $this->country;
	}

                            }





        
 

