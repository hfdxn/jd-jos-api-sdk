<?php

namespace JdJos\jd\request;
class CategoryReadFindByPIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findByPId";
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
                                                        		                                    	                        	                        	                        	                                                    	                   			private $parentCid;
    	                        
	public function setParentCid($parentCid){
		$this->parentCid = $parentCid;
         $this->apiParas["parentCid"] = $parentCid;
	}

	public function getParentCid(){
	  return $this->parentCid;
	}

                        	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 

