<?php

namespace JdJos\jd\request;
class CategoryReadFindAttrsByCategoryIdJosRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findAttrsByCategoryIdJos";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $attributeType;
    	                        
	public function setAttributeType($attributeType){
		$this->attributeType = $attributeType;
         $this->apiParas["attributeType"] = $attributeType;
	}

	public function getAttributeType(){
	  return $this->attributeType;
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





        
 

