<?php
class JosOauthRpcXidBatchPin2XidRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.oauth.rpc.xid.batchPin2Xid";
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
                                    	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $userPin;
                              public function setUserPin($userPin ){
                 $this->userPin=$userPin;
                 $this->apiParas["userPin"] = $userPin;
              }

              public function getUserPin(){
              	return $this->userPin;
              }
                                                                                                                }





        
 

