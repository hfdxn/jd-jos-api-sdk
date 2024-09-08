<?php
class GulfstreamServiceRecvPoTraceAndCustomsInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.gulfstream.service.recvPoTraceAndCustomsInfo";
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
                                                        		                                    	                   	                    		private $poNo;
    	                        
	public function setPoNo($poNo){
		$this->poNo = $poNo;
         $this->apiParas["poNo"] = $poNo;
	}

	public function getPoNo(){
	  return $this->poNo;
	}

                        	                   			private $eventCode;
    	                        
	public function setEventCode($eventCode){
		$this->eventCode = $eventCode;
         $this->apiParas["eventCode"] = $eventCode;
	}

	public function getEventCode(){
	  return $this->eventCode;
	}

                        	                   			private $eventDesc;
    	                        
	public function setEventDesc($eventDesc){
		$this->eventDesc = $eventDesc;
         $this->apiParas["eventDesc"] = $eventDesc;
	}

	public function getEventDesc(){
	  return $this->eventDesc;
	}

                        	                   			private $eventTime;
    	                        
	public function setEventTime($eventTime){
		$this->eventTime = $eventTime;
         $this->apiParas["eventTime"] = $eventTime;
	}

	public function getEventTime(){
	  return $this->eventTime;
	}

                        	                   			private $customsInfo;
    	                        
	public function setCustomsInfo($customsInfo){
		$this->customsInfo = $customsInfo;
         $this->apiParas["customsInfo"] = $customsInfo;
	}

	public function getCustomsInfo(){
	  return $this->customsInfo;
	}

                        	                   			private $ladInfo;
    	                        
	public function setLadInfo($ladInfo){
		$this->ladInfo = $ladInfo;
         $this->apiParas["ladInfo"] = $ladInfo;
	}

	public function getLadInfo(){
	  return $this->ladInfo;
	}

                        	                   			private $goodsInfo;
    	                        
	public function setGoodsInfo($goodsInfo){
		$this->goodsInfo = $goodsInfo;
         $this->apiParas["goodsInfo"] = $goodsInfo;
	}

	public function getGoodsInfo(){
	  return $this->goodsInfo;
	}

                        	                        	                        	                        	                            }





        
 

