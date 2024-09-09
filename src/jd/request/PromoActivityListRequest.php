<?php

namespace JdJos\jd\request;
class PromoActivityListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.activity.list";
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

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $extType;
    	                        
	public function setExtType($extType){
		$this->extType = $extType;
         $this->apiParas["extType"] = $extType;
	}

	public function getExtType(){
	  return $this->extType;
	}

                        	                   			private $activityStatus;
    	                        
	public function setActivityStatus($activityStatus){
		$this->activityStatus = $activityStatus;
         $this->apiParas["activityStatus"] = $activityStatus;
	}

	public function getActivityStatus(){
	  return $this->activityStatus;
	}

                        	                   			private $minBeginTime;
    	                        
	public function setMinBeginTime($minBeginTime){
		$this->minBeginTime = $minBeginTime;
         $this->apiParas["minBeginTime"] = $minBeginTime;
	}

	public function getMinBeginTime(){
	  return $this->minBeginTime;
	}

                        	                   			private $maxBeginTime;
    	                        
	public function setMaxBeginTime($maxBeginTime){
		$this->maxBeginTime = $maxBeginTime;
         $this->apiParas["maxBeginTime"] = $maxBeginTime;
	}

	public function getMaxBeginTime(){
	  return $this->maxBeginTime;
	}

                        	                   			private $minEndTime;
    	                        
	public function setMinEndTime($minEndTime){
		$this->minEndTime = $minEndTime;
         $this->apiParas["minEndTime"] = $minEndTime;
	}

	public function getMinEndTime(){
	  return $this->minEndTime;
	}

                        	                   			private $maxEndTime;
    	                        
	public function setMaxEndTime($maxEndTime){
		$this->maxEndTime = $maxEndTime;
         $this->apiParas["maxEndTime"] = $maxEndTime;
	}

	public function getMaxEndTime(){
	  return $this->maxEndTime;
	}

                        	                   			private $creator;
    	                        
	public function setCreator($creator){
		$this->creator = $creator;
         $this->apiParas["creator"] = $creator;
	}

	public function getCreator(){
	  return $this->creator;
	}

                        	                   			private $startId;
    	                        
	public function setStartId($startId){
		$this->startId = $startId;
         $this->apiParas["startId"] = $startId;
	}

	public function getStartId(){
	  return $this->startId;
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
                                                                                                                                                                        }





        
 

