<?php

namespace JdJos\jd\request;
class UeOrderNewGoDoorRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.goDoor";
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
                                                        		                                    	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $firstCallDate;
    	                        
	public function setFirstCallDate($firstCallDate){
		$this->firstCallDate = $firstCallDate;
         $this->apiParas["firstCallDate"] = $firstCallDate;
	}

	public function getFirstCallDate(){
	  return $this->firstCallDate;
	}

                        	                   			private $callDate;
    	                        
	public function setCallDate($callDate){
		$this->callDate = $callDate;
         $this->apiParas["callDate"] = $callDate;
	}

	public function getCallDate(){
	  return $this->callDate;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                            }





        
 

