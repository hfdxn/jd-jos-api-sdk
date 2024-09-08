<?php
class UserGetUserInfoByXIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.user.getUserInfoByXId";
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
                                    	                        	                   			private $XId;
    	                        
	public function setXId($XId){
		$this->XId = $XId;
         $this->apiParas["XId"] = $XId;
	}

	public function getXId(){
	  return $this->XId;
	}

                        	}





        
 

