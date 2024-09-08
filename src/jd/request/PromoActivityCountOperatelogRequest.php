<?php
class PromoActivityCountOperatelogRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.activity.count.operatelog";
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
                                                        		                                                        		                                    	                        	                        	                        	                        	                        	                                                                        		                                    	                        	                   			private $activityId;
    	                        
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activityId"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   	                    		private $skuIdList;
    	                        
	public function setSkuIdList($skuIdList){
		$this->skuIdList = $skuIdList;
         $this->apiParas["skuIdList"] = $skuIdList;
	}

	public function getSkuIdList(){
	  return $this->skuIdList;
	}

                        	                   			private $operateLevel;
    	                        
	public function setOperateLevel($operateLevel){
		$this->operateLevel = $operateLevel;
         $this->apiParas["operateLevel"] = $operateLevel;
	}

	public function getOperateLevel(){
	  return $this->operateLevel;
	}

                        	                   	                    		private $operateList;
    	                        
	public function setOperateList($operateList){
		$this->operateList = $operateList;
         $this->apiParas["operateList"] = $operateList;
	}

	public function getOperateList(){
	  return $this->operateList;
	}

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                        	                   			private $multiActivityId;
    	                        
	public function setMultiActivityId($multiActivityId){
		$this->multiActivityId = $multiActivityId;
         $this->apiParas["multiActivityId"] = $multiActivityId;
	}

	public function getMultiActivityId(){
	  return $this->multiActivityId;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                                                        }





        
 

