<?php
class PromoActivitySkuCountRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.activity.sku.count";
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

                        	                   			private $bindType;
    	                        
	public function setBindType($bindType){
		$this->bindType = $bindType;
         $this->apiParas["bindType"] = $bindType;
	}

	public function getBindType(){
	  return $this->bindType;
	}

                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                        	                   			private $deleted;
    	                        
	public function setDeleted($deleted){
		$this->deleted = $deleted;
         $this->apiParas["deleted"] = $deleted;
	}

	public function getDeleted(){
	  return $this->deleted;
	}

                                                        }





        
 

