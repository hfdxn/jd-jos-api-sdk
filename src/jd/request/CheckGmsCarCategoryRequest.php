<?php
class CheckGmsCarCategoryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.checkGmsCarCategory";
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
                                                        		                                    	                   			private $traceId;
    	                                                            
	public function setTraceId($traceId){
		$this->traceId = $traceId;
         $this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId(){
	  return $this->traceId;
	}

                        	                   			private $offset;
    	                        
	public function setOffset($offset){
		$this->offset = $offset;
         $this->apiParas["offset"] = $offset;
	}

	public function getOffset(){
	  return $this->offset;
	}

                        	                   			private $limit;
    	                        
	public function setLimit($limit){
		$this->limit = $limit;
         $this->apiParas["limit"] = $limit;
	}

	public function getLimit(){
	  return $this->limit;
	}

                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $reqSource;
    	                        
	public function setReqSource($reqSource){
		$this->reqSource = $reqSource;
         $this->apiParas["reqSource"] = $reqSource;
	}

	public function getReqSource(){
	  return $this->reqSource;
	}

                        	                   			private $gmsCarCategory;
    	                        
	public function setGmsCarCategory($gmsCarCategory){
		$this->gmsCarCategory = $gmsCarCategory;
         $this->apiParas["gmsCarCategory"] = $gmsCarCategory;
	}

	public function getGmsCarCategory(){
	  return $this->gmsCarCategory;
	}

                            }





        
 

