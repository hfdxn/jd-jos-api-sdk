<?php
class UpdateAppointmentRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.updateAppointment";
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
                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                                        		                                    	                   			private $preSellId;
    	                        
	public function setPreSellId($preSellId){
		$this->preSellId = $preSellId;
         $this->apiParas["preSellId"] = $preSellId;
	}

	public function getPreSellId(){
	  return $this->preSellId;
	}

                        	                   			private $robStartTime;
    	                        
	public function setRobStartTime($robStartTime){
		$this->robStartTime = $robStartTime;
         $this->apiParas["robStartTime"] = $robStartTime;
	}

	public function getRobStartTime(){
	  return $this->robStartTime;
	}

                        	                   			private $groupType;
    	                        
	public function setGroupType($groupType){
		$this->groupType = $groupType;
         $this->apiParas["groupType"] = $groupType;
	}

	public function getGroupType(){
	  return $this->groupType;
	}

                        	                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                        	                   			private $robEndTime;
    	                        
	public function setRobEndTime($robEndTime){
		$this->robEndTime = $robEndTime;
         $this->apiParas["robEndTime"] = $robEndTime;
	}

	public function getRobEndTime(){
	  return $this->robEndTime;
	}

                        	                        	                            }





        
 

