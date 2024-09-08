<?php
class VopAddressQueryJdAreaIdListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vop.address.queryJdAreaIdList";
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
                                                        		                                    	                        	                   			private $areaLevel;
    	                        
	public function setAreaLevel($areaLevel){
		$this->areaLevel = $areaLevel;
         $this->apiParas["areaLevel"] = $areaLevel;
	}

	public function getAreaLevel(){
	  return $this->areaLevel;
	}

                        	                   			private $jdAreaId;
    	                        
	public function setJdAreaId($jdAreaId){
		$this->jdAreaId = $jdAreaId;
         $this->apiParas["jdAreaId"] = $jdAreaId;
	}

	public function getJdAreaId(){
	  return $this->jdAreaId;
	}

                        	                        	                        	                            }





        
 

