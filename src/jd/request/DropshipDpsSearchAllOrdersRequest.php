<?php
class DropshipDpsSearchAllOrdersRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.searchAllOrders";
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
                                                        		                                    	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $beginDate;
    	                        
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["beginDate"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $modifiedBeginDate;
    	                        
	public function setModifiedBeginDate($modifiedBeginDate){
		$this->modifiedBeginDate = $modifiedBeginDate;
         $this->apiParas["modifiedBeginDate"] = $modifiedBeginDate;
	}

	public function getModifiedBeginDate(){
	  return $this->modifiedBeginDate;
	}

                        	                   			private $modifiedEndDate;
    	                        
	public function setModifiedEndDate($modifiedEndDate){
		$this->modifiedEndDate = $modifiedEndDate;
         $this->apiParas["modifiedEndDate"] = $modifiedEndDate;
	}

	public function getModifiedEndDate(){
	  return $this->modifiedEndDate;
	}

                        	                        	                   			private $pinBuyer;
    	                                                            
	public function setPinBuyer($pinBuyer){
		$this->pinBuyer = $pinBuyer;
         $this->apiParas["pin_buyer"] = $pinBuyer;
	}

	public function getPinBuyer(){
	  return $this->pinBuyer;
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





        
 

