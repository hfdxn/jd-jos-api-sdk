<?php

namespace JdJos\jd\request;
class OmnicBizStockJosServiceImplSearchBizStockInfoByPageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.OmnicBizStockJosServiceImpl.searchBizStockInfoByPage";
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
                                                        		                                    	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                            		                                    	                   			private $venderSkuId;
    	                        
	public function setVenderSkuId($venderSkuId){
		$this->venderSkuId = $venderSkuId;
         $this->apiParas["venderSkuId"] = $venderSkuId;
	}

	public function getVenderSkuId(){
	  return $this->venderSkuId;
	}

                        	                   			private $venderWarehouseCode;
    	                        
	public function setVenderWarehouseCode($venderWarehouseCode){
		$this->venderWarehouseCode = $venderWarehouseCode;
         $this->apiParas["venderWarehouseCode"] = $venderWarehouseCode;
	}

	public function getVenderWarehouseCode(){
	  return $this->venderWarehouseCode;
	}

                                                        }





        
 

