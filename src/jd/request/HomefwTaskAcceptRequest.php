<?php
class HomefwTaskAcceptRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.task.accept";
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

                        	                   			private $acceptType;
    	                        
	public function setAcceptType($acceptType){
		$this->acceptType = $acceptType;
         $this->apiParas["acceptType"] = $acceptType;
	}

	public function getAcceptType(){
	  return $this->acceptType;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $handleTime;
    	                        
	public function setHandleTime($handleTime){
		$this->handleTime = $handleTime;
         $this->apiParas["handleTime"] = $handleTime;
	}

	public function getHandleTime(){
	  return $this->handleTime;
	}

                        	                   			private $isOneOrder;
    	                        
	public function setIsOneOrder($isOneOrder){
		$this->isOneOrder = $isOneOrder;
         $this->apiParas["isOneOrder"] = $isOneOrder;
	}

	public function getIsOneOrder(){
	  return $this->isOneOrder;
	}

}





        
 

