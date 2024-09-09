<?php

namespace JdJos\jd\request;
class LocOrderSearchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.loc.order.search";
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

                        	                   			private $orderCreateTimeBegin;
    	                        
	public function setOrderCreateTimeBegin($orderCreateTimeBegin){
		$this->orderCreateTimeBegin = $orderCreateTimeBegin;
         $this->apiParas["orderCreateTimeBegin"] = $orderCreateTimeBegin;
	}

	public function getOrderCreateTimeBegin(){
	  return $this->orderCreateTimeBegin;
	}

                        	                   			private $orderCreateTimeEnd;
    	                        
	public function setOrderCreateTimeEnd($orderCreateTimeEnd){
		$this->orderCreateTimeEnd = $orderCreateTimeEnd;
         $this->apiParas["orderCreateTimeEnd"] = $orderCreateTimeEnd;
	}

	public function getOrderCreateTimeEnd(){
	  return $this->orderCreateTimeEnd;
	}

                        	                   			private $orderState;
    	                        
	public function setOrderState($orderState){
		$this->orderState = $orderState;
         $this->apiParas["orderState"] = $orderState;
	}

	public function getOrderState(){
	  return $this->orderState;
	}

                            }





        
 

