<?php

namespace JdJos\jd\request;
class ArealimitWriteUpdateWareAreaLimitsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.arealimit.write.updateWareAreaLimits";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $areaId;
                              public function setAreaId($areaId ){
                 $this->areaId=$areaId;
                 $this->apiParas["areaId"] = $areaId;
              }

              public function getAreaId(){
              	return $this->areaId;
              }
                                                                                                                                        	                   			private $limitType;
    	                        
	public function setLimitType($limitType){
		$this->limitType = $limitType;
         $this->apiParas["limitType"] = $limitType;
	}

	public function getLimitType(){
	  return $this->limitType;
	}

}





        
 

