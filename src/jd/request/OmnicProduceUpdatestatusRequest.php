<?php

namespace JdJos\jd\request;
class OmnicProduceUpdatestatusRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnic.produce.updatestatus";
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

                        	                        	                                            		                                    	                   			private $storeType;
    	                        
	public function setStoreType($storeType){
		$this->storeType = $storeType;
         $this->apiParas["storeType"] = $storeType;
	}

	public function getStoreType(){
	  return $this->storeType;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $operateName;
    	                        
	public function setOperateName($operateName){
		$this->operateName = $operateName;
         $this->apiParas["operateName"] = $operateName;
	}

	public function getOperateName(){
	  return $this->operateName;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $courierId;
    	                        
	public function setCourierId($courierId){
		$this->courierId = $courierId;
         $this->apiParas["courierId"] = $courierId;
	}

	public function getCourierId(){
	  return $this->courierId;
	}

                        	                   			private $courierName;
    	                        
	public function setCourierName($courierName){
		$this->courierName = $courierName;
         $this->apiParas["courierName"] = $courierName;
	}

	public function getCourierName(){
	  return $this->courierName;
	}

                        	                   			private $courierPhone;
    	                        
	public function setCourierPhone($courierPhone){
		$this->courierPhone = $courierPhone;
         $this->apiParas["courierPhone"] = $courierPhone;
	}

	public function getCourierPhone(){
	  return $this->courierPhone;
	}

                        	                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                                                        }





        
 

