<?php
class PopMarketingGatewayActivityListQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.activity.list.query";
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
                                                        		                                    	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
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

                        	                        	                   			private $bound;
    	                        
	public function setBound($bound){
		$this->bound = $bound;
         $this->apiParas["bound"] = $bound;
	}

	public function getBound(){
	  return $this->bound;
	}

                        	                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                        	                   			private $refActId;
    	                        
	public function setRefActId($refActId){
		$this->refActId = $refActId;
         $this->apiParas["refActId"] = $refActId;
	}

	public function getRefActId(){
	  return $this->refActId;
	}

                        	                   			private $virtualState;
    	                        
	public function setVirtualState($virtualState){
		$this->virtualState = $virtualState;
         $this->apiParas["virtualState"] = $virtualState;
	}

	public function getVirtualState(){
	  return $this->virtualState;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $mktActBaseNo;
    	                        
	public function setMktActBaseNo($mktActBaseNo){
		$this->mktActBaseNo = $mktActBaseNo;
         $this->apiParas["mktActBaseNo"] = $mktActBaseNo;
	}

	public function getMktActBaseNo(){
	  return $this->mktActBaseNo;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $orderField;
    	                        
	public function setOrderField($orderField){
		$this->orderField = $orderField;
         $this->apiParas["orderField"] = $orderField;
	}

	public function getOrderField(){
	  return $this->orderField;
	}

                        	                            }





        
 

