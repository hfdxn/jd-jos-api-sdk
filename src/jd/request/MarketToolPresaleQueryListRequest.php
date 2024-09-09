<?php

namespace JdJos\jd\request;
class MarketToolPresaleQueryListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.presale.query.list";
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
                                                        		                                    	                                                                        		                                    	                   			private $canSpotPresale;
    	                        
	public function setCanSpotPresale($canSpotPresale){
		$this->canSpotPresale = $canSpotPresale;
         $this->apiParas["canSpotPresale"] = $canSpotPresale;
	}

	public function getCanSpotPresale(){
	  return $this->canSpotPresale;
	}

                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $shipTime;
    	                        
	public function setShipTime($shipTime){
		$this->shipTime = $shipTime;
         $this->apiParas["shipTime"] = $shipTime;
	}

	public function getShipTime(){
	  return $this->shipTime;
	}

                        	                   			private $presaleStatus;
    	                        
	public function setPresaleStatus($presaleStatus){
		$this->presaleStatus = $presaleStatus;
         $this->apiParas["presaleStatus"] = $presaleStatus;
	}

	public function getPresaleStatus(){
	  return $this->presaleStatus;
	}

                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $presaleStartTime;
    	                        
	public function setPresaleStartTime($presaleStartTime){
		$this->presaleStartTime = $presaleStartTime;
         $this->apiParas["presaleStartTime"] = $presaleStartTime;
	}

	public function getPresaleStartTime(){
	  return $this->presaleStartTime;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $presaleId;
    	                        
	public function setPresaleId($presaleId){
		$this->presaleId = $presaleId;
         $this->apiParas["presaleId"] = $presaleId;
	}

	public function getPresaleId(){
	  return $this->presaleId;
	}

                        	                   			private $presaleEndTime;
    	                        
	public function setPresaleEndTime($presaleEndTime){
		$this->presaleEndTime = $presaleEndTime;
         $this->apiParas["presaleEndTime"] = $presaleEndTime;
	}

	public function getPresaleEndTime(){
	  return $this->presaleEndTime;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                            }





        
 

