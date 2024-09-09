<?php

namespace JdJos\jd\request;
class Jd3csOrderInsReceiveOrdersRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jd3cs.order.insReceiveOrders";
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

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $createBy;
    	                        
	public function setCreateBy($createBy){
		$this->createBy = $createBy;
         $this->apiParas["createBy"] = $createBy;
	}

	public function getCreateBy(){
	  return $this->createBy;
	}

                                            		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $orderNo;
                              public function setOrderNo($orderNo ){
                 $this->orderNo=$orderNo;
                 $this->apiParas["orderNo"] = $orderNo;
              }

              public function getOrderNo(){
              	return $this->orderNo;
              }
                                                                                                                                        	                   			private $opType;
    	                        
	public function setOpType($opType){
		$this->opType = $opType;
         $this->apiParas["opType"] = $opType;
	}

	public function getOpType(){
	  return $this->opType;
	}

                                                        }





        
 

