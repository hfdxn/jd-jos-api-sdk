<?php
class PopMarketingGatewayActivityCreateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.activity.create";
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
                                                        		                                    	                   			private $activityDetailName;
    	                        
	public function setActivityDetailName($activityDetailName){
		$this->activityDetailName = $activityDetailName;
         $this->apiParas["activityDetailName"] = $activityDetailName;
	}

	public function getActivityDetailName(){
	  return $this->activityDetailName;
	}

                        	                   			private $selfActPlusType;
    	                        
	public function setSelfActPlusType($selfActPlusType){
		$this->selfActPlusType = $selfActPlusType;
         $this->apiParas["selfActPlusType"] = $selfActPlusType;
	}

	public function getSelfActPlusType(){
	  return $this->selfActPlusType;
	}

                        	                   			private $skuFilePath;
    	                        
	public function setSkuFilePath($skuFilePath){
		$this->skuFilePath = $skuFilePath;
         $this->apiParas["skuFilePath"] = $skuFilePath;
	}

	public function getSkuFilePath(){
	  return $this->skuFilePath;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuIds;
                              public function setSkuIds($skuIds ){
                 $this->skuIds=$skuIds;
                 $this->apiParas["skuIds"] = $skuIds;
              }

              public function getSkuIds(){
              	return $this->skuIds;
              }
                                                                                                                                        	                   			private $planNum;
    	                        
	public function setPlanNum($planNum){
		$this->planNum = $planNum;
         $this->apiParas["planNum"] = $planNum;
	}

	public function getPlanNum(){
	  return $this->planNum;
	}

                        	                        	                   			private $isLongAct;
    	                        
	public function setIsLongAct($isLongAct){
		$this->isLongAct = $isLongAct;
         $this->apiParas["isLongAct"] = $isLongAct;
	}

	public function getIsLongAct(){
	  return $this->isLongAct;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $actType;
    	                        
	public function setActType($actType){
		$this->actType = $actType;
         $this->apiParas["actType"] = $actType;
	}

	public function getActType(){
	  return $this->actType;
	}

                        	                   			private $periodBeginTime;
    	                        
	public function setPeriodBeginTime($periodBeginTime){
		$this->periodBeginTime = $periodBeginTime;
         $this->apiParas["periodBeginTime"] = $periodBeginTime;
	}

	public function getPeriodBeginTime(){
	  return $this->periodBeginTime;
	}

                        	                   			private $actBaseName;
    	                        
	public function setActBaseName($actBaseName){
		$this->actBaseName = $actBaseName;
         $this->apiParas["actBaseName"] = $actBaseName;
	}

	public function getActBaseName(){
	  return $this->actBaseName;
	}

                        	                   			private $finishTime;
    	                        
	public function setFinishTime($finishTime){
		$this->finishTime = $finishTime;
         $this->apiParas["finishTime"] = $finishTime;
	}

	public function getFinishTime(){
	  return $this->finishTime;
	}

                        	                   			private $instalment;
    	                        
	public function setInstalment($instalment){
		$this->instalment = $instalment;
         $this->apiParas["instalment"] = $instalment;
	}

	public function getInstalment(){
	  return $this->instalment;
	}

                        	                   			private $bound;
    	                        
	public function setBound($bound){
		$this->bound = $bound;
         $this->apiParas["bound"] = $bound;
	}

	public function getBound(){
	  return $this->bound;
	}

                        	                   			private $periodEndTime;
    	                        
	public function setPeriodEndTime($periodEndTime){
		$this->periodEndTime = $periodEndTime;
         $this->apiParas["periodEndTime"] = $periodEndTime;
	}

	public function getPeriodEndTime(){
	  return $this->periodEndTime;
	}

                        	                   			private $skuUploadType;
    	                        
	public function setSkuUploadType($skuUploadType){
		$this->skuUploadType = $skuUploadType;
         $this->apiParas["skuUploadType"] = $skuUploadType;
	}

	public function getSkuUploadType(){
	  return $this->skuUploadType;
	}

                        	                   			private $actFeeType;
    	                        
	public function setActFeeType($actFeeType){
		$this->actFeeType = $actFeeType;
         $this->apiParas["actFeeType"] = $actFeeType;
	}

	public function getActFeeType(){
	  return $this->actFeeType;
	}

                        	                        	                        	                        	                        	                        	                            }





        
 

