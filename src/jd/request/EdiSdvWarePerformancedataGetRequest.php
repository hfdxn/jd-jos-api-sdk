<?php

namespace JdJos\jd\request;
class EdiSdvWarePerformancedataGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.sdv.ware.performancedata.get";
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
                                                        		                                    	                   			private $queryStartTime;
    	                        
	public function setQueryStartTime($queryStartTime){
		$this->queryStartTime = $queryStartTime;
         $this->apiParas["queryStartTime"] = $queryStartTime;
	}

	public function getQueryStartTime(){
	  return $this->queryStartTime;
	}

                        	                   			private $queryEndTime;
    	                        
	public function setQueryEndTime($queryEndTime){
		$this->queryEndTime = $queryEndTime;
         $this->apiParas["queryEndTime"] = $queryEndTime;
	}

	public function getQueryEndTime(){
	  return $this->queryEndTime;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                            }





        
 

