<?php

namespace JdJos\jd\request;
class CarNotificationStationStatusRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.car.notificationStationStatus";
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
                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                                            		                                    	                   			private $ConnectorID;
    	                        
	public function setConnectorID($ConnectorID){
		$this->ConnectorID = $ConnectorID;
         $this->apiParas["ConnectorID"] = $ConnectorID;
	}

	public function getConnectorID(){
	  return $this->ConnectorID;
	}

                        	                   			private $Status;
    	                        
	public function setStatus($Status){
		$this->Status = $Status;
         $this->apiParas["Status"] = $Status;
	}

	public function getStatus(){
	  return $this->Status;
	}

                        	                   			private $ParkStatus;
    	                        
	public function setParkStatus($ParkStatus){
		$this->ParkStatus = $ParkStatus;
         $this->apiParas["ParkStatus"] = $ParkStatus;
	}

	public function getParkStatus(){
	  return $this->ParkStatus;
	}

                        	                   			private $LockStatus;
    	                        
	public function setLockStatus($LockStatus){
		$this->LockStatus = $LockStatus;
         $this->apiParas["LockStatus"] = $LockStatus;
	}

	public function getLockStatus(){
	  return $this->LockStatus;
	}

                            }





        
 

