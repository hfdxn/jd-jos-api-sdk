<?php

namespace JdJos\jd\request;
class UpdateCheckStatusBatchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.updateCheckStatusBatch";
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
                                                        		                                    	                   			private $authkey;
    	                        
	public function setAuthkey($authkey){
		$this->authkey = $authkey;
         $this->apiParas["authkey"] = $authkey;
	}

	public function getAuthkey(){
	  return $this->authkey;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $expStatus;
    	                        
	public function setExpStatus($expStatus){
		$this->expStatus = $expStatus;
         $this->apiParas["expStatus"] = $expStatus;
	}

	public function getExpStatus(){
	  return $this->expStatus;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $venderSkuId;
                              public function setVenderSkuId($venderSkuId ){
                 $this->venderSkuId=$venderSkuId;
                 $this->apiParas["venderSkuId"] = $venderSkuId;
              }

              public function getVenderSkuId(){
              	return $this->venderSkuId;
              }
                                                                                                                                                                                                                                                                                                                       private $upc;
                              public function setUpc($upc ){
                 $this->upc=$upc;
                 $this->apiParas["upc"] = $upc;
              }

              public function getUpc(){
              	return $this->upc;
              }
                                                                                                                                                                                                                                                                                                                       private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                        	                   			private $xidBuyer;
    	                                                            
	public function setXidBuyer($xidBuyer){
		$this->xidBuyer = $xidBuyer;
         $this->apiParas["xid_buyer"] = $xidBuyer;
	}

	public function getXidBuyer(){
	  return $this->xidBuyer;
	}

                            }





        
 

