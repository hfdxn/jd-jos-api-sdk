<?php
class YipProductionOrderListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.orderList";
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
                                                        		                                    	                   			private $localeStr;
    	                        
	public function setLocaleStr($localeStr){
		$this->localeStr = $localeStr;
         $this->apiParas["localeStr"] = $localeStr;
	}

	public function getLocaleStr(){
	  return $this->localeStr;
	}

                        	                   			private $loginName;
    	                        
	public function setLoginName($loginName){
		$this->loginName = $loginName;
         $this->apiParas["loginName"] = $loginName;
	}

	public function getLoginName(){
	  return $this->loginName;
	}

                        	                   			private $coId;
    	                        
	public function setCoId($coId){
		$this->coId = $coId;
         $this->apiParas["coId"] = $coId;
	}

	public function getCoId(){
	  return $this->coId;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $modifyStartTime;
    	                        
	public function setModifyStartTime($modifyStartTime){
		$this->modifyStartTime = $modifyStartTime;
         $this->apiParas["modifyStartTime"] = $modifyStartTime;
	}

	public function getModifyStartTime(){
	  return $this->modifyStartTime;
	}

                        	                   			private $modifyEndTime;
    	                        
	public function setModifyEndTime($modifyEndTime){
		$this->modifyEndTime = $modifyEndTime;
         $this->apiParas["modifyEndTime"] = $modifyEndTime;
	}

	public function getModifyEndTime(){
	  return $this->modifyEndTime;
	}

                        	                            }





        
 

