<?php

namespace JdJos\jd\request;
class HomefwTaskVisitingServiceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.task.visitingService";
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
                                    	                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $masterName;
    	                        
	public function setMasterName($masterName){
		$this->masterName = $masterName;
         $this->apiParas["masterName"] = $masterName;
	}

	public function getMasterName(){
	  return $this->masterName;
	}

                        	                   			private $masterPhone;
    	                        
	public function setMasterPhone($masterPhone){
		$this->masterPhone = $masterPhone;
         $this->apiParas["masterPhone"] = $masterPhone;
	}

	public function getMasterPhone(){
	  return $this->masterPhone;
	}

                        	                   			private $serviceDate;
    	                        
	public function setServiceDate($serviceDate){
		$this->serviceDate = $serviceDate;
         $this->apiParas["serviceDate"] = $serviceDate;
	}

	public function getServiceDate(){
	  return $this->serviceDate;
	}

}





        
 

