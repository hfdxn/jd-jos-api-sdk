<?php

namespace JdJos\jd\request;
class DraftGetDraftInfoByVersionRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.draft.getDraftInfoByVersion";
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
                                                        		                                    	                   			private $productId;
    	                        
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["productId"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

                        	                   			private $resultMode;
    	                        
	public function setResultMode($resultMode){
		$this->resultMode = $resultMode;
         $this->apiParas["resultMode"] = $resultMode;
	}

	public function getResultMode(){
	  return $this->resultMode;
	}

                        	                        	                        	                        	                   			private $draftVersion;
    	                        
	public function setDraftVersion($draftVersion){
		$this->draftVersion = $draftVersion;
         $this->apiParas["draftVersion"] = $draftVersion;
	}

	public function getDraftVersion(){
	  return $this->draftVersion;
	}

                            }





        
 

