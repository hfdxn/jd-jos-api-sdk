<?php

namespace JdJos\jd\request;
class MarketToolCouponApiServiceCouponReadOuterServiceQueryCouponPageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.coupon.api.service.CouponReadOuterService.queryCouponPage";
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
                                                        		                                    	                   			private $creator;
    	                        
	public function setCreator($creator){
		$this->creator = $creator;
         $this->apiParas["creator"] = $creator;
	}

	public function getCreator(){
	  return $this->creator;
	}

                        	                   			private $newStatus;
    	                        
	public function setNewStatus($newStatus){
		$this->newStatus = $newStatus;
         $this->apiParas["newStatus"] = $newStatus;
	}

	public function getNewStatus(){
	  return $this->newStatus;
	}

                        	                   			private $skuIdStr;
    	                        
	public function setSkuIdStr($skuIdStr){
		$this->skuIdStr = $skuIdStr;
         $this->apiParas["skuIdStr"] = $skuIdStr;
	}

	public function getSkuIdStr(){
	  return $this->skuIdStr;
	}

                        	                        	                   			private $bindType;
    	                        
	public function setBindType($bindType){
		$this->bindType = $bindType;
         $this->apiParas["bindType"] = $bindType;
	}

	public function getBindType(){
	  return $this->bindType;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $couponId;
    	                        
	public function setCouponId($couponId){
		$this->couponId = $couponId;
         $this->apiParas["couponId"] = $couponId;
	}

	public function getCouponId(){
	  return $this->couponId;
	}

                        	                   			private $wareChoseType;
    	                        
	public function setWareChoseType($wareChoseType){
		$this->wareChoseType = $wareChoseType;
         $this->apiParas["wareChoseType"] = $wareChoseType;
	}

	public function getWareChoseType(){
	  return $this->wareChoseType;
	}

                        	                   			private $delete;
    	                        
	public function setDelete($delete){
		$this->delete = $delete;
         $this->apiParas["delete"] = $delete;
	}

	public function getDelete(){
	  return $this->delete;
	}

                        	                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $beginTime;
    	                        
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $couponTitle;
    	                        
	public function setCouponTitle($couponTitle){
		$this->couponTitle = $couponTitle;
         $this->apiParas["couponTitle"] = $couponTitle;
	}

	public function getCouponTitle(){
	  return $this->couponTitle;
	}

                        	                   			private $couponIdStr;
    	                        
	public function setCouponIdStr($couponIdStr){
		$this->couponIdStr = $couponIdStr;
         $this->apiParas["couponIdStr"] = $couponIdStr;
	}

	public function getCouponIdStr(){
	  return $this->couponIdStr;
	}

                        	                        	                                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                            }





        
 

