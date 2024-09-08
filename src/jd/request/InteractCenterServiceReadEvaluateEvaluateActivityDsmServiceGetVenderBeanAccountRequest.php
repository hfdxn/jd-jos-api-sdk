<?php
class InteractCenterServiceReadEvaluateEvaluateActivityDsmServiceGetVenderBeanAccountRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.interact.center.service.read.evaluate.EvaluateActivityDsmService.getVenderBeanAccount";
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
                                                        		                                    	                        	                        	                   			private $shopName;
    	                        
	public function setShopName($shopName){
		$this->shopName = $shopName;
         $this->apiParas["shopName"] = $shopName;
	}

	public function getShopName(){
	  return $this->shopName;
	}

                        	                   			private $supplierCode;
    	                        
	public function setSupplierCode($supplierCode){
		$this->supplierCode = $supplierCode;
         $this->apiParas["supplierCode"] = $supplierCode;
	}

	public function getSupplierCode(){
	  return $this->supplierCode;
	}

                        	                        	                            }





        
 

