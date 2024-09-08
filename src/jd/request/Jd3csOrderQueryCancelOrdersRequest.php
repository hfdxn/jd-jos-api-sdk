<?php
class Jd3csOrderQueryCancelOrdersRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jd3cs.order.queryCancelOrders";
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
                                                                                                                                        	                   			private $cancelStatus;
    	                        
	public function setCancelStatus($cancelStatus){
		$this->cancelStatus = $cancelStatus;
         $this->apiParas["cancelStatus"] = $cancelStatus;
	}

	public function getCancelStatus(){
	  return $this->cancelStatus;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $firstServiceType;
    	                        
	public function setFirstServiceType($firstServiceType){
		$this->firstServiceType = $firstServiceType;
         $this->apiParas["firstServiceType"] = $firstServiceType;
	}

	public function getFirstServiceType(){
	  return $this->firstServiceType;
	}

                        	                   			private $secondServiceType;
    	                        
	public function setSecondServiceType($secondServiceType){
		$this->secondServiceType = $secondServiceType;
         $this->apiParas["secondServiceType"] = $secondServiceType;
	}

	public function getSecondServiceType(){
	  return $this->secondServiceType;
	}

                                                        }





        
 

