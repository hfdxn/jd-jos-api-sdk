<?php
class PromoActivitySkuListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.activity.sku.list";
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

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderField;
                              public function setOrderField($orderField ){
                 $this->orderField=$orderField;
                 $this->apiParas["orderField"] = $orderField;
              }

              public function getOrderField(){
              	return $this->orderField;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderType;
                              public function setOrderType($orderType ){
                 $this->orderType=$orderType;
                 $this->apiParas["orderType"] = $orderType;
              }

              public function getOrderType(){
              	return $this->orderType;
              }
                                                                                                                                        	                   			private $deleted;
    	                        
	public function setDeleted($deleted){
		$this->deleted = $deleted;
         $this->apiParas["deleted"] = $deleted;
	}

	public function getDeleted(){
	  return $this->deleted;
	}

                        	                   			private $startId;
    	                        
	public function setStartId($startId){
		$this->startId = $startId;
         $this->apiParas["startId"] = $startId;
	}

	public function getStartId(){
	  return $this->startId;
	}

                                                        }





        
 

