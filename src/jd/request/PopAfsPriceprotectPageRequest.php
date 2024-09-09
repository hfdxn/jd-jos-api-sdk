<?php

namespace JdJos\jd\request;
class PopAfsPriceprotectPageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.priceprotect.page";
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
                                                        		                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $applyEndDate;
    	                        
	public function setApplyEndDate($applyEndDate){
		$this->applyEndDate = $applyEndDate;
         $this->apiParas["applyEndDate"] = $applyEndDate;
	}

	public function getApplyEndDate(){
	  return $this->applyEndDate;
	}

                        	                   			private $pricePrtctType;
    	                        
	public function setPricePrtctType($pricePrtctType){
		$this->pricePrtctType = $pricePrtctType;
         $this->apiParas["pricePrtctType"] = $pricePrtctType;
	}

	public function getPricePrtctType(){
	  return $this->pricePrtctType;
	}

                        	                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $applyBeginDate;
    	                        
	public function setApplyBeginDate($applyBeginDate){
		$this->applyBeginDate = $applyBeginDate;
         $this->apiParas["applyBeginDate"] = $applyBeginDate;
	}

	public function getApplyBeginDate(){
	  return $this->applyBeginDate;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $applyStatus;
    	                        
	public function setApplyStatus($applyStatus){
		$this->applyStatus = $applyStatus;
         $this->apiParas["applyStatus"] = $applyStatus;
	}

	public function getApplyStatus(){
	  return $this->applyStatus;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
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





        
 

